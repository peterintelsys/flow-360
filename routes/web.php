<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('customers/orders/{customer}', 'CustomerController@orders');
Route::post('customers/searchresult', 'CustomerController@search');
Route::resource('customers', 'CustomerController');

Route::get('/css/css', function () {
    return view('css.csstwo');
});

Route::view('/css/kunder', 'css.kunder');
Route::view('/css/create', 'css.create');

Route::view('/css/card', 'css.card');
Route::view('/css/card/orders', 'css.card_orders');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/', 'HomeController@admin')->name('admin');
