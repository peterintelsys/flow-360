@extends('layouts.css')

@section('breadcrumb')

<div class="breadcrumb">

<ul>
<li><a href="/home">{{ __('messages.field_home') }}</a></li>
<li>{{ __('messages.header_sales') }}</li>
</ul>                 
            
</div>

@endsection

@section('content')

<div class="header-one">Försäljning</div>

<div class="card">

<div class="flexbox space-between card-header">

<div>
{{ __('messages.header_sales') }}
</div>

<div>

@include('customers.includes.dropdown_main')

</div>

</div>




<div class="card-content">


@include('customers.includes.search_form')

	


<div class="header-two">{{ __('text.results') }} ({{ count($customers) }} st)</div>
<div style="padding: 15px 0;">
	
<table>
	<thead>
		<th>Id</th>
		<th>{{ __('text.name') }}</th>
		<th>{{ __('text.city') }}</th>
	</thead>
	<tbody>
		@foreach($customers as $customer)
		<tr>
			<td><a href="{{ route('customers.show', ['id' => $customer->id]) }}">{{ $customer->id }}</a></td>
			<td><a href="{{ route('customers.show', ['id' => $customer->id]) }}">{{ $customer->name }}</a></td>
			<td><a href="{{ route('customers.show', ['id' => $customer->id]) }}">{{ $customer->city1 }}</a></td>
		</tr>
		@endforeach
		
	</tbody>
</table>	

</div>



</div>

</div>


@endsection