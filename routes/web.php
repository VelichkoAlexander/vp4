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

Route::get('/', 'HomeController@index')->name('orders');
Route::post('/orders', 'OrderController@store');

Auth::routes();

Route::get('/orders', 'OrderController@index')->name('orders');
Route::resource('product', 'ProductController');
Route::resource('category', 'CategoryController');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/category', 'AdminController@category');
Route::get('/admin/order', 'AdminController@order');
Route::get('/admin/product', 'AdminController@product');



