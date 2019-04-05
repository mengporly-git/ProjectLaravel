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

// front-end
// Route::get('/index','shopcontroller@show');
// Route::get('/product','shopcontroller@shows');
// Route::get('/msi','shopcontroller@show_msi');
// Route::get('/dell','shopcontroller@show_dell');
// Route::get('/promotion','shopcontroller@show_promotion');
// Route::get('/accessory','shopcontroller@show_accessory');
// Route::get('/acer','shopcontroller@show_acer');
// Route::get('/hp','shopcontroller@show_hp');
// Route::get('/contact','shopcontroller@show_contact');
// Route::get('/allproduct','shopcontroller@show_allproduct');
// Route::get('/aboutUs','shopcontroller@show_about');
Route::resource('/index','Computercontroller');
Route::resource('/allproduct','ProductController');
Route::resource('/asus','AsusController');
Route::resource('/msi','MsiController');
Route::resource('/hp','HpController');
Route::resource('/dell','DellController');
Route::resource('/acer','AcerController');

// back-end
	Route::prefix('admin')->group(function()
	{
		Route::get('/dashboard', function() 
		{
			return view('admin.index');
		});

		Route::get('/login','AdminProductController@index');
		Route::get('/insertProduct','AdminProductController@indexs');
		Route::get('/insertCustomer','AdminProductController@indexq');
	});



