@extends('layouts.main')

@section('title', 'Card layout')


@section('content')

<div class="container">

<h1>CSS</h1>
<hr>
<br>
<a href="/css/css">CSS index</a>
<br><br>

<h3>Card layout</h3>

<div class="card">

<div class="card-top">

<div>
European Edcation Center
</div>

<div>
<a href="javascript:void(0);" onclick="showModal(this)" data-target="nav">&#8285;</a>
</div>

</div>

<div id="nav" class="hide">
<ul class="navbar-align">
	<li class="navbar-align-item"><a href="/css/card">Kunddata</a></li>
	<li class="navbar-align-item"><a href="" class="active">Orders</a></li>
	<li class="navbar-align-item"><a href="">Kontaktpersoner</a></li>
	
</ul>
</div>

<div class="card-content">


<h6>Orders</h6>
<br>
<a href="" class="button-extrasmall outlined">+</a>
<br><br>
<div>
	<table>
                <thead>
                    <th>Id</th>
                    <th>Datum</th>
                    <th>Belopp</th>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="">1</a></td>
                        <td><a href="">2018-03-01</a></td>
                        <td><a href="">3000</a></td>
                    </tr>
                    <tr>
                        <td><a href="">2</a></td>
                        <td><a href="">2018-03-01</a></td>
                        <td><a href="">3000</a></td>
                    </tr>
                    <tr>
                        <td><a href="">3</a></td>
                        <td><a href="">2018-03-01</a></td>
                        <td><a href="">3000</a></td>
                    </tr>
                    <tr>
                        <td><a href="">4</a></td>
                        <td><a href="">2018-03-01</a></td>
                        <td><a href="">3000</a></td>
                    </tr>
                    <tr>
                        <td><a href="">5</a></td>
                        <td><a href="">2018-03-01</a></td>
                        <td><a href="">3000</a></td>
                    </tr>
                </tbody>
            </table>
</div>


</div>


</div>

@endsection