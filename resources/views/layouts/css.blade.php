<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
  
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,500, 500italic,700,700italic">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

    <div class="container">

    <div class="flexbox space-between navbar-one">
        <div>
            {{ Auth::user()->client->name }}
            </div>
        <div>
            <div class="dropdown">
            <a href="javascript:void(0);" onclick="showModal(this)" class="dropbtn-big" data-target="dropmain">&#9776;</a>
            <div id="dropmain" class="dropdown-content">
            <a href="">{{ __('text.home') }}</a>
            <a href="">{{ __('text.myaccount') }}</a>
            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('text.logout') }}
                                    </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </div>
            </div>
            
        </div>
    </div>
    

    <div class="content">

        @yield('breadcrumb')

        
        <div class="flexgrid grid-3-1">

        <div>
        @yield('content')
        </div>

        <div>
            <div class="header-one">{{ __('text.information') }}</div>

            <div class="card">

            <div class="flexbox space-between card-header">

            <div>
            {{ __('text.messages') }}
            </div>

            <div>

            <div class="dropdown">
            <a href="javascript:void(0);" onclick="showModal(this)" class="dropbtn" data-target="dropmess">&#8285;</a>
            <div id="dropmess" class="dropdown-content">
            <a href="">Skapa...</a>
            <a href="">Visa alla</a>
            </div>
            </div>

            </div>

            </div>

            <div class="card-content">

            <div class="header-two">{{ __('text.new') }}</div>

            <div class="flexgrid grid-2-fix messages">

            <div class="messages-item"><a href="">2018-04-01</a></div>
            <div class="messages-item"><a href="">Sjukanmälan testar lång mening</a></div>
            <div class="messages-item"><a href="">2018-04-01</a></div>
            <div class="messages-item"><a href="">Sjukanmälan testar lång mening</a></div>    

            </div>    

            </div>

            </div>

            <div class="card">

            <div class="flexbox space-between card-header">

            <div>
            {{ __('text.todo') }}
            </div>

            <div>

            <div class="dropdown">
            <a href="javascript:void(0);" onclick="showModal(this)" class="dropbtn" data-target="droptodo">&#8285;</a>
            <div id="droptodo" class="dropdown-content">
            <a href="">Skapa...</a>
            <a href="">Visa alla</a>
            </div>
            </div>

            </div>

            </div>

            <div class="card-content">

            <div class="header-two">{{ __('text.today') }}</div>

            <div class="flexgrid grid-2-fix messages">

            <div class="messages-item"><a href="">2018-04-01</a></div>
            <div class="messages-item"><a href="">Ring Ikea</a></div>
            <div class="messages-item"><a href="">2018-04-01</a></div>
            <div class="messages-item"><a href="">Sjukanmälan testar lång mening</a></div>    

            </div> 

            </div>

            </div>  
       
        </div>

        </div>

    </div>

    </div>
    <script src="{{ asset('js/app.js') }}"></script> 
    </body>
</html>