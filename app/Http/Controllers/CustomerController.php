<?php

namespace App\Http\Controllers;

use App\Repositories\CustomerInterface;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    
    protected $customer;

   
    public function __construct(CustomerInterface $customer)
    {
        $this->middleware('auth');

        $this->middleware('lang');

        $this->customer = $customer;
    }


    public function index()
    {

        return view('customers.index');
    }

    public function search(Request $request)
    {
        
        $validatedData = $request->validate([
        'search' => 'required|max:40',
        ]);

        $name = $request->input('search');

        $customers = $this->customer->all()->where('name', 'LIKE', "%$name%")->get();

        return view('customers.search', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedData = $request->validate([
        'namn' => 'required|max:255',
        'adresstype1' => 'required|max:255',
        'street1' => 'required|max:255',
        'postcode1' => 'required|max:255',
        'city1' => 'required|max:255',

        ]);

       $customer = $this->customer->store($request);

       return redirect(route('customers.show', ['id' => $customer->id]))->withInput();

    }

    
    public function show($id)
    {
        $customer = $this->customer->show($id);
       
        return view('customers.show', compact('customer'));
    }

    public function orders($id)
    {
        
        $customer = $this->customer->show($id);


        $total = $customer->totalOrders();


        return view('customers.orders', compact('customer', 'total'));
    }

    
    public function edit($id)
    {
        $customer = $this->customer->show($id);

        return view('customers.edit', compact('customer'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'namn' => 'required|max:255',
        'adresstype1' => 'required|max:255',
        'street1' => 'required|max:255',
        'postcode1' => 'required|max:255',
        'city1' => 'required|max:255',

        ]);

        $customer = $this->customer->show($id);

        $customer = $this->customer->update($request, $customer);

       return redirect(route('customers.show', ['id' => $customer->id]))->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
