<?php

namespace App\Repositories;

use App\Customer;


class Customers extends MyController implements CustomerInterface
{


	public function all()
	{
		$this->setUser();

		return Customer::where('client_id', $this->user->client_id);
	}

	public function show($id)
	{

		$customer = Customer::find($id);

		$this->checkAuth($customer->client_id);

		return $customer;
	}

	public function store($request)
	{
		$this->setUser();

		$customer = New Customer;

       $customer->client_id = $this->user->client_id;
       $customer->orgnbr = $request->input('orgnbr');
       $customer->name = $request->input('namn');
       $customer->phone1 = $request->input('phone1');
       $customer->adresstype1 = $request->input('adresstype1');
       $customer->street1 = $request->input('street1');
       $customer->postalcode1 = $request->input('postcode1');
       $customer->city1 = $request->input('city1');
       
       $customer->save();

       return $customer;
	}

	public function update($request, $customer)
	{

       $customer->client_id = $this->user->client_id;
       $customer->orgnbr = $request->input('orgnbr');
       $customer->name = $request->input('namn');
       $customer->phone1 = $request->input('phone1');
       $customer->adresstype1 = $request->input('adresstype1');
       $customer->street1 = $request->input('street1');
       $customer->postalcode1 = $request->input('postcode1');
       $customer->city1 = $request->input('city1');
       
       $customer->save();

       return $customer;
	}

	public function destroy($id)
	{

		$customer = Customer::find($id);

		$this->checkAuth($customer->client_id);

	}


}