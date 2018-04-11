<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Flow-360</title>
  
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,500, 500italic,700,700italic">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

    <div class="container">

    <div class="flexbox space-between navbar-one">
        <div>
            Flow-360
    
            </div>
        <div>
            
            
        </div>
    </div>


        
        <div class="flexgrid-center" style="margin-top: 30px;">

        <div>
        @yield('content')
        </div>

        

        </div>

    

    </div>
    <script src="{{ asset('js/app.js') }}"></script> 
    </body>
</html>