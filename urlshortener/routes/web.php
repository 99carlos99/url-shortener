<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\UrlsController@index')->name('index');
Route::get('/{url}','App\Http\Controllers\UrlsController@retrieve')->name('retrieve');
Route::post('/napoleonized','App\Http\Controllers\UrlsController@napoleonized')->name('napoleonized');

/*Route::get('/', function () {
    return view('landing');
});*/
