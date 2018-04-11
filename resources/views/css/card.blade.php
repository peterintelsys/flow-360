@extends('layouts.main')

@section('title', 'Card layout')


@section('content')





<div><h3>Kunder</h3></div>



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
	<li class="navbar-align-item"><a href="#" class="active">Kunddata</a></li>
	<li class="navbar-align-item"><a href="/css/card/orders">Orders</a></li>
	<li class="navbar-align-item"><a href="">Kontaktpersoner</a></li>
</ul>
</div>

<div class="card-content">


<h6>Phone</h6>
<div class="card-item">
<div class="item">0431-18864</div><div class="item">0431-18864</div>
</div>

<h6>Adress</h6>
<div class="card-item">
<div class="item">(Besök) Storgatan 20, Ängelholm</div><div class="item">(Fakt) Storgatan 20, Ängelholm</div><div class="item">(Lev) Storgatan 20, Ängelholm</div>
</div>


<h6>Info</h6>
<p>Här kommer info	Milligram has some functional classes to improve the performance and productivity everyday.
Milligram has some functional classes to improve the performance and productivity everyday.
Milligram has some functional classes to improve the performance and productivity everyday.</p>


</div>

</div>




@endsection