@extends('layout.shortener')

@section('shortener_content')
    <div id = "page_holder">
        <!--<img src="../imgs/img01.png">-->
        <h1 class="name">Napoleon</h1>
        <h2 class="slogan">url shortener</h2>
        <form action= "/napoleonized" method = "post" id = "inputs">
            @csrf
            <input type="url" placeholder="Enter your long long link in here..." name = "long_url" class = "long" required><br>
            <input type="submit" value="napoleonize" class="nap">
        </form>

    </div>
    
@endsection