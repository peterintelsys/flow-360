@extends('layouts.css')

@section('breadcrumb')

<div class="breadcrumb">

<ul>
<li><a href="/home">{{ __('text.home') }}</a></li>
<li><a href="{{ route('customers.index') }}">{{ __('text.sales') }}</a></li>
<li>{{ $customer->name }}</li>
</ul>                
            
</div>

@endsection

@section('content')

<div class="header-one">{{ __('text.sales') }}</div>

<div class="card">

<div class="flexbox space-between card-header">

<div>
{{ $customer->name }}
</div>

<div>

<div class="dropdown">
<a href="javascript:void(0);" onclick="showModal(this)" class="dropbtn" data-target="dropcustomer">&#8285;</a>
<div id="dropcustomer" class="dropdown-content">
<a href="{{ route('customers.edit', ['id' => $customer->id]) }}">{{ __('text.edit') }}...</a>
<a href="">{{ __('text.todo') }}...</a>
<a href="">{{ __('text.ledger') }}...</a>
</div>
</div>

</div>

</div>


@include('customers.includes.show_navbar_under')



<div class="card-content">


<div class="header-two">{{ __('text.phone') }}</div>
<div class="flexbox wrap card-group">
<div class="card-item">{{ $customer->phone1}}</div><div class="card-item">{{ $customer->phone2 }}</div>
</div>

<div class="header-two">{{ __('text.address') }}</div>
<div class="flexbox wrap card-group">
<div class="card-item">{{ $customer->street1 }} {{ $customer->postalcode1 }} {{ $customer->city1 }}</div><div class="card-item">Storgatan 20, Ängelholm</div><div class="card-item">Storgatan 20, Ängelholm</div>
</div>


<div class="header-two">Info</div>
<p>Här kommer info	Milligram has some functional classes to improve the performance and productivity everyday.
Milligram has some functional classes to improve the performance and productivity everyday.
Milligram has some functional classes to improve the performance and productivity everyday.</p>


</div>

</div>


@endsection