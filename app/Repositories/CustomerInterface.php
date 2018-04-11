<?php

namespace App\Repositories;


Interface CustomerInterface
{
	public function all();

	public function show($id);

	public function store($request);

	public function update($request, $customer);

	public function destroy($id);

}