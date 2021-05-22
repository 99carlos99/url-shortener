<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nepoleon</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito Sans', sans-serif;
                background-color: #F5F5F5;
            }
            #page_holder{
                position: absolute;
                width: 90%;
                left: 50%;
                top: 45%;
                transform: translateX(-50%) translateY(-50%);
                text-align: center;
            }
            #page_holder h1{
                font-size: 40px;
            }
            #page_holder h2{
                color: #0D91FF;
                margin-top: -25px; 
            }
            .long{
                text-align: center;
                border: none;
                border-bottom: solid 0.5px;
                margin-bottom: 30px;
                width: 500px;
                height: 50px;
                font-size: 25px;
                font-family: 'Nunito Sans', sans-serif;
                background-color: transparent;
            }
            .nap{
                border: none;
                border-radius: 10px;
                cursor: pointer;
                font-size: 25px;
                width: 200px;
                height: 50px;
                font-family: 'Nunito Sans', sans-serif;
                background-color: #4BACFC;
                color: #F5F5F5;
            }
            .nap:hover{
                background-color: #2BACFC;
            }
            input:focus{
                outline: none;
            }
            @media only screen and (max-width: 600px) {
                .long{
                    width: 80%;
                    font-size:18px;
                    height: 30px;
                }
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="shortener_content">
            @yield('shortener_content')
        </div>
    </body>
</html>
