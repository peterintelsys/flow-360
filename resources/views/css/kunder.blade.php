@extends('layouts.css')

@section('title', 'ver2 layout')


@section('content')


<div class="header-one">Kunder</div>

<div class="card">

<div class="flexbox space-between card-header">

<div>
Kunder
</div>

<div>

<div class="dropdown">
<a href="javascript:void(0);" onclick="showModal(this)" class="dropbtn" data-target="dropcustomer">&#8285;</a>
<div id="dropcustomer" class="dropdown-content">
<a href="/css/create">Skapa ny kund...</a>
<a href="">Att göra...</a>
<a href="">Reskontra...</a>
</div>
</div>

</div>

</div>




<div class="card-content">


<div class="header-two">Sök kund</div>

<form>
		
	<div class="flexgrid grid-2-fix">
	<div>
	<label>Kund namn</label>
	<input type="search" name="">
	</div>
	<div>
	<label style="visibility: hidden;">test</label>
	<input type="submit" class="search" name="" value="Sök...">
	
</div>
	</div>
</form>

	


<div class="header-two">Sökresultat (2 st)</div>
<div style="padding: 15px 0;">
	
<table>
	<thead>
		<th>Id</th>
		<th>Namn</th>
		<th>Ort</th>
	</thead>
	<tbody>
		<tr>
			<td><a href="">123</a></td>
			<td><a href="">EEC</a></td>
			<td><a href="">Ängelholm</a></td>
		</tr>
		<tr>
			<td><a href="">125</a></td>
			<td><a href="">European Education Center</a></td>
			<td><a href="">Ängelholm</a></td>
		</tr>
	</tbody>
</table>	

</div>



</div>

</div>



@endsection