@extends('layouts.css')

@section('breadcrumb')

<div class="breadcrumb">

<ul>
<li><a href="/home">{{ __('text.home') }}</a></li>
<li>{{ __('text.sales') }}</li>
</ul>                
            
</div>

@endsection

@section('content')

<div class="header-one">{{ __('text.module') }}</div>

<div class="card">

<div class="flexbox space-between card-header">

<div>
{{ __('text.sales') }}
</div>

<div>

@include('customers.includes.dropdown_main')

</div>

</div>




<div class="card-content">


@include('customers.includes.search_form')


</div>

</div>


@endsection