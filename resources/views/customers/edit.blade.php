@extends('layouts.css')

@section('breadcrumb')

<div class="breadcrumb">

<ul>
<li><a href="/home">Hem</a></li>
<li><a href="{{ route('customers.index') }}">Försäljning</a></li>
<li><a href="{{ route('customers.show', ['id' => $customer->id]) }}">{{ $customer->name }}</a></li>
<li>Redigera</li>
</ul>                
            
</div>

@endsection


@section('content')


<div class="header-one">Försäljning</div>

<div class="card">

<div class="flexbox space-between card-header">

<div>
{{ $customer->name }} ({{ __('messages.form_edit') }})
</div>

<div>

<div class="dropdown">
<a href="javascript:void(0);" onclick="showModal(this)" class="dropbtn" data-target="dropcustomer">&#8285;</a>
<div id="dropcustomer" class="dropdown-content">
<a href="">Skapa ny kund...</a>
<a href="">Att göra...</a>
<a href="">Reskontra...</a>
</div>
</div>

</div>

</div>

@include('includes.errors')

<div class="card-content">


<form method="POST" action="{{ route('customers.update', ['id' => $customer->id]) }}">
	@csrf	{{ method_field('PUT') }}
	
	<div class="flexgrid grid-2-fix">
	<div>	
	<label>Org. nummer</label>
	<input type="text" name="orgnbr" value="{{ $customer->orgnbr }}">
	</div>
	<div>
	<label>Namn</label>
	<input type="text" name="namn" style="@if($errors->has('namn')) background-color: #FFF5F2;@endif" value="{{ $customer->name }}">
	</div>
	</div>

	<div class="flexgrid grid-2-fix">
	<div>	
	<label>Telefon</label>
	<input type="text" name="phone1" value="{{ $customer->phone1 }}">
	</div>
	<div>
	<label>Email</label>
	<input type="text" name="email">
	</div>
	</div>

	<fieldset>
	<legend>Adress 1 </legend>
	<label>Adress typ</label>
	<select id="ageRangeField" style="max-width: 30%;" name="adresstype1" value="{{ $customer->adresstype1 }}">
	  <option value="0">Välj typ...</option>
	  <option value="1">Besök/Lev/Fakt</option>
      <option value="2">Besök</option>
      <option value="3">Lev</option>
      <option value="4">Fakt</option>
    </select>

	<label>Gatuadress</label>
	<input type="text" name="street1" value="{{ $customer->street1 }}" style="@if($errors->has('street1')) background-color: #FFF5F2;@endif">

	<div class="flexgrid grid-2-fix">
	<div>
	<label>Post nr.</label>
	<input type="text" name="postcode1" value="{{ $customer->postalcode1 }}" style="@if($errors->has('postcode1')) background-color: #FFF5F2;@endif">
	</div>
	<div>
	<label>Ort</label>
	<input type="text" name="city1" value="{{ $customer->city1 }}" style="@if($errors->has('city1')) background-color: #FFF5F2;@endif">
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