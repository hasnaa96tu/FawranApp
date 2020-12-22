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
    return view('home');
});
Route::get('/users/customer', function () {
    return view('users.customer.index');
});
Route::get('/users/customer/create', function () {
    return view('users.customer.create');
});
Route::get('/users/customer/show', function () {
    return view('users.customer.show');
});
Route::get('/users/resturant/create', function () {
    return view('users.resturant.create');
});
Route::get('/users/resturant', function () {
    return view('users.resturant.index');
});
Route::get('/users/resturant/show', function () {
    return view('users.resturant.show');
});
Route::get('/users/user/create', function () {
    return view('users.user.create');
});
Route::get('/users/user', function () {
    return view('users.user.index');
});
Route::get('/users/user/show', function () {
    return view('users.user.show');
});
// Route::get('/users/pharmacy/create', function () {
//     return view('users.pharmacy.create');
// });
Route::get('/users/pharmacy', function () {
    return view('users.pharmacy.index');
});
Route::get('/users/pharmacy/show', function () {
    return view('users.Pharmacy.show');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/resturant', function () {
    return view('resturant.index');
});
// Route::get('/pharmacy', function () {
//     return view('pharmacy.index');
// });

Route::get('/driver/create', function () {
    return view('drivers.create');
});
Route::get('/order', function () {
    return view('order.index');
});
Route::get('/order/id', function () {
    return view('order.show');
});
Route::get('/promo', function () {
    return view('promotion.index');
});

Route::get('/supermarket/create', function () {
    return view('users.supermarket.create');
});
Route::get('/supermarket/category/create', function () {
    return view('users.supermarket.createCategory');
});
Route::get('/supermarket/material/create', function () {
    return view('users.supermarket.createMaterial');
});
Route::get('/supermarket', function () {
    return view('users.supermarket.index');
});
Route::get('/supermarket/show', function () {
    return view('users.supermarket.show');
});
Route::get('/supermarket/category/show', function () {
    return view('users.supermarket.showMaterials');
});

//hasnaa
Route::resource('/user_type','UserTypeController');
Route::resource('/type','TypeController');
Route::resource('/category','CategoryController');
Route::resource('/customer','CustomerController');
Route::resource('/order','OrderController');
Route::get('/order/{id}/accept','OrderController@accept');
Route::get('/order/{id}/customer','OrderController@getCustomerOrders');
Route::put('/order/{id}/reject','OrderController@reject')->name('order.reject');
//search

Route::get('/search/orders/results','OrderController@search');
Route::get('/search',function () {
    return view('order.search');
});



Auth::routes();

Route::get('/home', 'UserController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('user','UserController');

});
//drivers
Route::get('/drivers','UserController@index_driver');

//Rahaf
//Pharmacy Routes
Route::get('/users/pharmacy', 'PharmacyController@index')->name('pharmacy.index');
Route::get('/users/pharmacy/create', 'PharmacyController@create')->name('pharmacy.create');
Route::post('/users/pharmacy/create', 'PharmacyController@store')->name('pharmacy.store');
Route::get('/users/pharmacy/edit/{id}', 'PharmacyController@edit')->name('pharmacy.edit');
Route::post('/users/pharmacy/update/{id}', 'PharmacyController@update')->name('pharmacy.update');
Route::get('/users/pharmacy/{id}', 'PharmacyController@destroy')->name('pharmacy.destroy');

//Supermarket Routes
Route::get('/users/supermarket', 'SupermarketController@index')->name('supermarket.index');
Route::get('/users/supermarket/create', 'SupermarketController@create')->name('supermarket.create');
Route::post('/users/supermarket/create', 'SupermarketController@store')->name('supermarket.store');
Route::get('/users/supermarket/edit/{id}', 'SupermarketController@edit')->name('supermarket.edit');
Route::post('/users/supermarket/update/{id}', 'SupermarketController@update')->name('supermarket.update');
Route::get('/users/supermarket/{id}', 'SupermarketController@destroy')->name('supermarket.destroy');

//Medical Companies
Route::get('/users/company', 'MedicalCompanyController@index')->name('company.index');
Route::get('/users/company/create', 'MedicalCompanyController@create')->name('company.create');
Route::post('/users/company/create', 'MedicalCompanyController@store')->name('company.store');
Route::get('/users/company/edit/{id}', 'MedicalCompanyController@edit')->name('company.edit');
Route::post('/users/company/update/{id}', 'MedicalCompanyController@update')->name('company.update');
Route::get('/users/company/{id}', 'MedicalCompanyController@destroy')->name('company.destroy');

//Drugs
Route::get('/users/drug', 'DrugController@index')->name('drug.index');
Route::get('/users/drug/create', 'DrugController@create')->name('drug.create');
Route::post('/users/drug/create', 'DrugController@store')->name('drug.store');
Route::get('/users/drug/edit/{id}', 'DrugController@edit')->name('drug.edit');
Route::post('/users/drug/update/{id}', 'DrugController@update')->name('drug.update');
Route::get('/users/drug/{id}', 'DrugController@destroy')->name('drug.destroy');
