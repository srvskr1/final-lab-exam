<?php



Route::get('/', function ()
 {
    return view('index');
})->name('index');

Route::get('/abc', function () {
    return view('test');
});

//Route::get('/login', 'LoginController@index');
Route::get('/login', ['as'=>'login.index','uses'=>'LoginController@index']);
Route::post('/login', ['uses'=>'LoginController@verify']);
Route::get('/customer/registration', 'customerController@reg')->name('customer.registration');
Route::post('/customer/registration', 'customerController@regcus');

Route::group(['middleware'=>['sess']], function(){

											/*investor*/

	



	Route::get('/home', 'HomeController@index')->name('home.index');
	Route::get('/home/profile', 'HomeController@profile')->name('home.profile');
	Route::post('/home/profile', 'HomeController@upload');

	Route::get('/home/stdList', 'HomeController@show')->name('home.stdlist');
	Route::get('/home/mediList', 'HomeController@showmedi')->name('home.medilist');
	Route::get('/home/addmedi', 'HomeController@addmedi')->name('home.addmedi');
	Route::post('/home/addmedi', 'HomeController@savemedi');
	Route::get('/home/edit/{sid}', 'HomeController@edit')->name('home.edit');
	Route::get('/home/mdelete/{sid}', 'HomeController@medidelete')->name('home.mdelete');
	Route::post('/home/mdelete/{sid}', 'HomeController@medidelete');
	Route::post('/home/edit/{sid}', 'HomeController@update');
	Route::get('/home/details/{sid}', 'HomeController@details')->name('home.details');



	Route::get('/customer', 'customerController@index')->name('customer.index');
	Route::get('/customer/profile', 'customerController@profile')->name('customer.profile');
	Route::get('/customer/mediList', 'customerController@showmedi')->name('customer.medilist');
	Route::get('/customer/mediList/{sid}', 'customerController@cart')->name('customer.cart');
	Route::post('/customer/mediList/{sid}', 'customerController@cartadd');

	
	Route::group(['middleware'=>['type']], function(){
		Route::get('/home/add', 'HomeController@add')->name('home.add');
		Route::post('/home/add', 'HomeController@create');
		Route::get('/home/delete/{sid}', 'HomeController@delete')->name('home.delete');
		Route::post('/home/delete/{sid}', 'HomeController@destroy');	
	});
});



Route::get('/logout', 'logoutController@index');

//Route::resource('accounts', 'AccountController');




