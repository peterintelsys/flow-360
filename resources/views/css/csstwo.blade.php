@extends('layouts.css')

@section('title', 'ver2 layout')


@section('content')


<div class="header-one">Kunder</div>

<div class="card">

<div class="flexbox space-between card-header">

<div>
European Education Center
</div>

<div>

<div class="dropdown">
<a href="javascript:void(0);" onclick="showModal(this)" class="dropbtn" data-target="dropcustomer">&#8285;</a>
<div id="dropcustomer" class="dropdown-content">
<a href="">Redigera...</a>
<a href="">Att göra...</a>
<a href="">Reskontra...</a>
</div>
</div>

</div>

</div>


<ul class="flexgrid grid-3-1-fix navbar-two">
	<li class="navbar-align-item"><a href="#" class="active">Kunddata</a></li>
	<li class="navbar-align-item"><a href="/css/card/orders">Orders</a></li>
	<li class="navbar-align-item"><a href="">Kontaktpersoner</a></li>
</ul>



<div class="card-content">


<div class="header-two">Phone</div>
<div class="flexbox wrap card-group">
<div class="card-item">0431-18864</div><div class="card-item">0431-18864</div>
</div>

<div class="header-two">Adress</div>
<div class="flexbox wrap card-group">
<div class="card-item">Storgatan 20, Ängelholm</div><div class="card-item">Storgatan 20, Ängelholm</div><div class="card-item">Storgatan 20, Ängelholm</div>
</div>


<div class="header-two">Info</div>
<p>Här kommer info	Milligram has some functional classes to improve the performance and productivity everyday.
Milligram has some functional classes to improve the performance and productivity everyday.
Milligram has some functional classes to improve the performance and productivity everyday.</p>


</div>

</div>



@endsection