<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('lang');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        

        $modules = [
            ['name' => 'Försäljning', 'link' =>'customers.index'],
            ['name' => 'Leverantörer', 'link' =>'customers.index'],
            ['name' => 'Lager', 'link' =>'customers.index'],
            ['name' => 'Ekonomi', 'link' =>'customers.index'],
            ['name' => 'Admin', 'link' =>'admin']
        ];

        return view('home', compact('modules'));
    }

    public function admin()
    {


        return view('admin.index');
    }
}
