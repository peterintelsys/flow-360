@extends('layouts.css')

@section('breadcrumb')

<div class="breadcrumb">

<ul>
<li>{{ __('text.home') }}</li>
</ul>                
            
</div>

@endsection

@section('content')

<div class="header-one">{{ __('text.modules') }}</div>

<div class="flexgrid grid-3">

    
    <a href="{{ route('customers.index') }}" class="module">{{ __('text.sales') }}</a>
    <a href="{{ route('customers.index') }}" class="module">{{ __('text.purchase') }}</a>
    <a href="{{ route('customers.index') }}" class="module">{{ __('text.stock') }}</a>
    <a href="{{ route('customers.index') }}" class="module">{{ __('text.finance') }}</a>
    <a href="{{ route('admin') }}" class="module">{{ __('text.admin') }}</a>
    
    

</div>

@endsection
