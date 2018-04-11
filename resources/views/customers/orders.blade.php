@extends('layouts.css')

@section('breadcrumb')

<div class="breadcrumb">

<ul>
<li><a href="/home">Hem</a></li>
<li><a href="{{ route('customers.index') }}">Försäljning</a></li>
<li>{{ $customer->name }}</li>
</ul>                
            
</div>

@endsection

@section('content')

<div class="header-one">Kunder</div>

<div class="card">

<div class="flexbox space-between card-header">

<div>
{{ $customer->name }}
</div>

<div>

<div class="dropdown">
<a href="javascript:void(0);" onclick="showModal(this)" class="dropbtn" data-target="dropcustomer">&#8285;</a>
<div id="dropcustomer" class="dropdown-content">
<a href="">Ny order...</a>
<a href="">Fakturera</a>
<a href="">Reskontra...</a>
</div>
</div>

</div>

</div>


<ul class="flexgrid grid-3-1-fix navbar-two">
	<li class="navbar-align-item"><a href="{{ route('customers.show', ['id' => $customer->id]) }}">{{ __('text.customer') }}</a></li>
	<li class="navbar-align-item"><a href="#" class="active">{{ __('text.orders') }}</a></li>
	<li class="navbar-align-item"><a href="">{{ __('text.contacts') }}</a></li>
</ul>



<div class="card-content">


<div class="header-two">Orders</div>

<table>
	<thead>
		<th>Id</th>
		<th>Datum</th>
		<th style="text-align: right; padding-right: 20px;">Belopp</th>
	</thead>
	<tbody>
		@foreach($customer->orders as $order)
		<tr>
			<td><a href="">{{ $order->id }}</a></td>
			<td><a href="">{{ $order->created_at }}</a></td>
			<td style="text-align: right; padding-right: 20px;"><a href="">{{ $order->summary }}</a></td>
		</tr>
		@endforeach
		<tr>
			<td></td>
			<td style="text-align: right;">Summa</td>
			<td style="text-align: right; padding-right: 20px;">{{ $total }}</td>
		</tr>
	</tbody>
</table>


</div>

</div>


@endsection