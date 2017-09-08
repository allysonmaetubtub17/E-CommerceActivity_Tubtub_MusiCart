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
    return redirect('shop');
});

Route::resource('shop', 'ProductController');

Route::resource('cart', 'CartController');

Route::delete('emptyCart', 'CartController@emptyCart');

/*
Route::get('/invoice', function(){
	return view('invoice');
});

Route::get('/invoice1', function(){
	return view('invoice1');
});
*/
Auth::routes();
