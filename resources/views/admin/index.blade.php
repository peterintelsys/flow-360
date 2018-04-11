@extends('layouts.css')

@section('breadcrumb')

<div class="breadcrumb">

<ul>
<li><a href="/home">{{ __('messages.field_home') }}</a></li>
<li>Admin</li>
</ul>                
            
</div>

@endsection

@section('content')

<div class="header-one">{{ __('messages.field_module') }}</div>

<div class="card">

<div class="flexbox space-between card-header">

<div>
Admin
</div>

<div>

<div class="dropdown">
<a href="javascript:void(0);" onclick="showModal(this)" class="dropbtn" data-target="dropcustomer">&#8285;</a>
<div id="dropcustomer" class="dropdown-content">
<a href="#">{{ __('messages.field_user') }}</a>
<a href="#">Orders...</a>
<a href="#">Statistik...</a>
</div>
</div>

</div>

</div>




<div class="card-content">


<div class="header-two">Register</div>
<ul class="block">
	<li><a href="">{{ __('messages.field_user') }}</a></li>
	<li><a href="">{{ __('messages.field_mycompany') }}</a></li>
</ul>




</div>

</div>


@endsection