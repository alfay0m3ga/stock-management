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

Route::get('/api/products', 'ProductsController@index');
Route::get('/api/products/create', 'ProductsController@create');
Route::post('/api/products', 'ProductsController@store');
Route::get('/api/products/{id}', 'ProductsController@edit');
Route::put('/api/products/{id}', 'ProductsController@update');
Route::delete('/api/products/{id}', 'ProductsController@destroy');
