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
    return redirect('/redstore');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//redstore routes
Route::resource('/redstore', 'RedstoreController');
//Route::get('/product', 'RedstoreController@product');

//Profile routes
Route::resource('/profile', 'ProfileController');
//Shop routes
Route::resource('/shop', 'ShopController');
Route::get('all/product','ShopController@catalog')->name('all.catalog');
Route::get('ajaxshop', 'ShopController@shop');
//Product routes
Route::resource('/product', 'ProductsController');

//Admin routes
Route::resource('admin', 'AdminController');
Route::get('all/users', 'AdminController@users')->name('all.users');


//Cart routes
Route::resource('/redstore/cart/1', 'CartController');
