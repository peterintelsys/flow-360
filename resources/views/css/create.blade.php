@extends('layouts.css')

@section('title', 'ver2 layout')


@section('content')


<div class="header-one">Kunder</div>

<div class="card">

<div class="flexbox space-between card-header">

<div>
Skapa ny kund
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




<div class="card-content">


<form>
	
	<div class="flexgrid grid-2-fix">
	<div>	
	<label>Org. nummer</label>
	<input type="text" name="">
	</div>
	<div>
	<label>Namn</label>
	<input type="text" name="">
	</div>
	</div>

	<div class="flexgrid grid-2-fix">
	<div>	
	<label>Telefon</label>
	<input type="text" name="">
	</div>
	<div>
	<label>Email</label>
	<input type="text" name="">
	</div>
	</div>

	<fieldset>
	<legend>Adress 1 </legend>
	<label>Adress typ</label>
	<select id="ageRangeField" style="max-width: 30%;">
	  <option value="0">Välj typ...</option>
	  <option value="1">Besök/Lev/Fakt</option>
      <option value="2">Besök</option>
      <option value="3">Lev</option>
      <option value="4">Fakt</option>
    </select>

	<label>Gatuadress</label>
	<input type="text" name="">

	<div class="flexgrid grid-2-fix">
	<div>
	<label>Post nr.</label>
	<input type="text" name="">
	</div>
	<div>
	<label>Ort</label>
	<input type="text" name="">
	</div>
	</div>

	<a href="javascript:void(0);" onclick="showModal(this)" data-target="adress2">Lägg till fler adresser</a>
	</fieldset>

	<fieldset id="adress2" class="hide">
	<legend>Adress 2 </legend>
	<label>Adress typ</label>
	<select id="ageRangeField" style="max-width: 30%;">
		<option value="0">Välj typ...</option>
		<option value="1">Besök/Lev/Fakt</option>
      <option value="2">Besök</option>
      <option value="3">Lev</option>
      <option value="4">Fakt</option>
    </select>

	<label>Gatuadress</label>
	<input type="text" name="">

	<div class="flexgrid grid-2-fix">
	<div>
	<label>Post nr.</label>
	<input type="text" name="">
	</div>
	<div>
	<label>Ort</label>
	<input type="text" name="">
	</div>
	</div>

	<a href="javascript:void(0);" onclick="showModal(this)" data-target="adress3">Lägg till fler adresser</a>
	</fieldset>

	<fieldset id="adress3" class="hide">
	<legend>Adress 3 </legend>
	<label>Adress typ</label>
	<select id="ageRangeField" style="max-width: 30%;">
	  <option value="0">Välj typ...</option>
	  <option value="1">Besök/Lev/Fakt</option>
      <option value="2">Besök</option>
      <option value="3">Lev</option>
      <option value="4">Fakt</option>
    </select>

	<label>Gatuadress</label>
	<input type="text" name="">

	<div class="flexgrid grid-2-fix">
	<div>
	<label>Post nr.</label>
	<input type="text" name="">
	</div>
	<div>
	<label>Ort</label>
	<input type="text" name="">
	</div>
	</div>
	</fieldset>


	<br><br>
	<input type="submit" name="" value="Spara"> <input type="reset" name="" value="Ångra">
	
</form>

	

</div>

</div>



@endsection