<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class UrlsController extends Controller
{
    public function index(){
        return view ('landing');
    }

    public function napoleonized(Request $request){
        $random_string = Str::random(8);
        DB::table('urls')->insert([
            'long_url' => $request['long_url'],
            'short_url' => URL::to('/') . "/" . $random_string
        ]);
        $final_URL = URL::to('/') . "/" . $random_string;
        return $final_URL;
    }

    public function retrieve ($url){
        $short_url = URL::to('/') . "/" . $url;
        $query = DB::table('urls')->where('short_url', '=', $short_url);

        if($query->exists()){
            return redirect($query->value('long_url'));
        }
        else {
            return view ('landing');
        }
    } 
}
