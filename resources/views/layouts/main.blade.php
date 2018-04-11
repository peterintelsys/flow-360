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

    @include('includes._main-navbar')

<div class="flex-search">

<div>
<ul class="breadcrumb"> 
  <li><a href="/css/css">Home</a></li>
  <li><a href="/css/card">Kunder</a></li>
  <li>European Education Center</li>
</ul>
</div>

<div>

<form>
    
<div class="flex-search-input">

<div><input type="search" class="search" name="search"></div>

<div><input type="submit" name="" class="clear" value="Sök..."></div>
</div>
</form>



</div>  

</div>






<div class="flex-grid grid-2-1">


<div>
    @yield('content')

</div>

<div>

    <div><h3>Information</h3></div>
    
<div class="card">

<div class="card-top">

<div>
Meddelande
</div>

<div>
<a href="javascript:void(0);" onclick="showModal(this)" data-target="nav">&#8285;</a>
</div>

</div>

<div id="nav" class="hide">
<ul class="navbar-align">
    <li class="navbar-align-item"><a href="#" class="active">Kunddata</a></li>
    <li class="navbar-align-item"><a href="/css/card/orders">Orders</a></li>
    <li class="navbar-align-item"><a href="">Kontaktpersoner</a></li>
</ul>
</div>

<div class="card-content">

<table>
                <thead>
                    
                    <th>Datum</th>
                    <th>Meddelande</th>
                </thead>
                <tbody>
                    <tr>
                        
                        <td><a href="">2 Mars</a></td>
                        <td><a href="">Här kommer info  Milligram</a></td>
                    </tr>
                    <tr>
                        
                        <td><a href="">2018-03-01</a></td>
                        <td><a href="">Här kommer info  Milligram</a></td>
                    </tr>
                    <tr>
                        
                        <td><a href="">2018-03-01</a></td>
                        <td><a href="">Här kommer info  Milligram</a></td>
                    </tr>
                    <tr>
                        
                        <td><a href="">2018-03-01</a></td>
                        <td><a href="">Här kommer info  Milligram</a></td>
                    </tr>
                    <tr>
                        
                        <td><a href="">2018-03-01</a></td>
                        <td><a href="">Här kommer info  Milligram</a></td>
                    </tr>
                </tbody>
            </table>

</div>  

</div> 

<div class="card">

<div class="card-top">

<div>
Att göra
</div>

<div>
<a href="javascript:void(0);" onclick="showModal(this)" data-target="nav">&#8285;</a>
</div>

</div>

<div id="nav" class="hide">
<ul class="navbar-align">
    <li class="navbar-align-item"><a href="#" class="active">Kunddata</a></li>
    <li class="navbar-align-item"><a href="/css/card/orders">Orders</a></li>
    <li class="navbar-align-item"><a href="">Kontaktpersoner</a></li>
</ul>
</div>

<div class="card-content">

<table>
                <thead>
                    
                    <th>Datum</th>
                    <th>Att göra</th>
                </thead>
                <tbody>
                    <tr>
                        
                        <td><a href="">2018-03-01</a></td>
                        <td><a href="">Här kommer info  Milligram</a></td>
                    </tr>
                    <tr>
                        
                        <td><a href="">2018-03-01</a></td>
                        <td><a href="">Här kommer info  Milligram</a></td>
                    </tr>
                    <tr>
                        
                        <td><a href="">2018-03-01</a></td>
                        <td><a href="">Här kommer info  Milligram</a></td>
                    </tr>
                    <tr>
                        
                        <td><a href="">2018-03-01</a></td>
                        <td><a href="">Här kommer info  Milligram</a></td>
                    </tr>
                    <tr>
                        
                        <td><a href="">2018-03-01</a></td>
                        <td><a href="">Här kommer info  Milligram</a></td>
                    </tr>
                </tbody>
            </table>

</div> 


</div>




    
</div>

</div>

</div>


    <script src="{{ asset('js/app.js') }}"></script> 
    </body>
</html>