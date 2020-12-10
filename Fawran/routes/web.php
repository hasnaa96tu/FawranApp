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
    return view('layouts.master');
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
Route::get('/users/pharmacy/create', function () {
    return view('users.pharmacy.create');
});
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
Route::get('/pharmacy', function () {
    return view('pharmacy.index');
});
Route::get('/driver', function () {
    return view('drivers.index');
});
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

Route::resource('/user_type','UserTypeController');
Route::resource('/type','TypeController');
Route::resource('/category','CategoryController');
Route::resource('/customer','CustomerController');
Route::resource('/order','OrderController');
Route::get('/order/{id}/accept','OrderController@accept');

Route::put('/order/{id}/reject','OrderController@reject')->name('order.reject');
//search

Route::get('/search/orders/results','OrderController@search');
Route::get('/search',function () {
    return view('order.search');
});
