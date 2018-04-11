@extends('layouts.css')

@section('breadcrumb')

<div class="breadcrumb">

<ul>
<li><a href="/home">{{ __('text.home') }}</a></li>
<li><a href="{{ route('customers.index') }}">{{ __('text.sales') }}</a></li>
<li>{{ __('text.createnewcustomer') }}</li>
</ul>                
            
</div>

@endsection


@section('content')


<div class="header-one">{{ __('text.sales') }}</div>

<div class="card">

<div class="flexbox space-between card-header">

<div>
{{ __('text.createnewcustomer') }}
</div>

<div>

@include('customers.includes.dropdown_main')

</div>

</div>

@include('includes.errors')

<div class="card-content">


<form method="POST" action="{{ route('customers.store') }}">
	@csrf
	
	<div class="flexgrid grid-2-fix">
	<div>	
	<label>{{ __('text.orgnbr') }}</label>
	<input type="text" name="orgnbr" value="{{ old('orgnbr') }}">
	</div>
	<div>
	<label>{{ __('text.name') }}</label>
	<input type="text" name="namn" style="@if($errors->has('namn')) background-color: #FFF5F2;@endif" value="{{ old('namn') }}">
	</div>
	</div>

	<div class="flexgrid grid-2-fix">
	<div>	
	<label>{{ __('text.phone') }}</label>
	<input type="text" name="phone1" value="{{ old('phone1') }}">
	</div>
	<div>
	<label>{{ __('text.email') }}</label>
	<input type="text" name="email" value="{{ old('email') }}">
	</div>
	</div>

	<fieldset>
	<legend>{{ __('text.address') }} 1 </legend>
	<label>{{ __('text.address') }} typ</label>
	<select id="ageRangeField" style="max-width: 30%;" name="adresstype1">
	  <option value="0">Välj typ...</option>
	  <option value="1">Besök/Lev/Fakt</option>
      <option value="2">Besök</option>
      <option value="3">Lev</option>
      <option value="4">Fakt</option>
    </select>

	<label>{{ __('text.address') }}</label>
	<input type="text" name="street1" value="{{ old('street1') }}" style="@if($errors->has('street1')) background-color: #FFF5F2;@endif">

	<div class="flexgrid grid-2-fix">
	<div>
	<label>{{ __('text.postcode') }}</label>
	<input type="text" name="postcode1" value="{{ old('postcode1') }}" style="@if($errors->has('postcode1')) background-color: #FFF5F2;@endif">
	</div>
	<div>
	<label>{{ __('text.city') }}</label>
	<input type="text" name="city1" value="{{ old('city1') }}" style="@if($errors->has('city1')) background-color: #FFF5F2;@endif">
	</div>
	</div>

	<a href="javascript:void(0);" onclick="showModal(this)" data-target="adress2">Lägg till fler adresser</a>
	</fieldset>

	<fieldset id="adress2" class="hide">
	<legend>Adress 2 </legend>
	<label>Adress typ</label>
	<select id="ageRangeField" style="max-width: 30%;" name="adresstype2">
		<option value="0">Välj typ...</option>
		<option value="1">Besök/Lev/Fakt</option>
      <option value="2">Besök</option>
      <option value="3">Lev</option>
      <option value="4">Fakt</option>
    </select>

	<label>Gatuadress</label>
	<input type="text" name="street2">

	<div class="flexgrid grid-2-fix">
	<div>
	<label>Post nr.</label>
	<input type="text" name="postcode2">
	</div>
	<div>
	<label>Ort</label>
	<input type="text" name="city2">
	</div>
	</div>

	<a href="javascript:void(0);" onclick="showModal(this)" data-target="adress3">Lägg till fler adresser</a>
	</fieldset>

	<fieldset id="adress3" class="hide">
	<legend>Adress 3 </legend>
	<label>Adress typ</label>
	<select id="ageRangeField" style="max-width: 30%;" name="adresstype3">
	  <option value="0">Välj typ...</option>
	  <option value="1">Besök/Lev/Fakt</option>
      <option value="2">Besök</option>
      <option value="3">Lev</option>
      <option value="4">Fakt</option>
    </select>

	<label>Gatuadress</label>
	<input type="text" name="street3">

	<div class="flexgrid grid-2-fix">
	<div>
	<label>Post nr.</label>
	<input type="text" name="postcode3">
	</div>
	<div>
	<label>Ort</label>
	<input type="text" name="city3">
	</div>
	</div>
	</fieldset>


	<br><br>
	<input type="submit" value="Spara"> <input type="reset" name="" value="Ångra">
	
</form>

	

</div>

</div>



@endsection