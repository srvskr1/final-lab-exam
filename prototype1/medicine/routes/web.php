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

Route::get('/login', ['as'=>'login.index','uses'=>'LoginController@index']);
Route::post('/login', ['uses'=>'LoginController@verify']);


Route::group(['middleware'=>['sess']], function(){

											/*Amin*/

	



	Route::get('/home', 'HomeController@index')->name('home.index');
	Route::get('/home/profile', 'HomeController@profile')->name('home.profile');
	Route::post('/home/profile', 'HomeController@upload');

	Route::get('/home/customerList', 'HomeController@show')->name('home.stdList');
	Route::get('/home/edit/{sid}', 'HomeController@edit')->name('home.edit');
	Route::post('/home/edit/{sid}', 'HomeController@update');
	Route::get('/home/details/{sid}', 'HomeController@details')->name('home.details');


	/*Customer*/
	Route::get('/customer', 'customerController@index')->name('customer.index');


	/*Route::group(['middleware'=>['type']], function(){
		Route::get('/home/add', 'HomeController@add')->name('home.add');
		Route::post('/home/add', 'HomeController@create');
		Route::get('/home/delete/{sid}', 'HomeController@delete')->name('home.delete');
		Route::post('/home/delete/{sid}', 'HomeController@destroy');	
	});*/

});


