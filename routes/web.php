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

//Route::get('/', "HomeController@index");
// Route::get('/show/{id}', "HomeController@show");

Route::resource('boards', 'BoardsController');
Route::get('loginPage', 'BoardsController@login_create');
Route::post('login', 'BoardsController@login');
Route::get('logout', 'BoardsController@logout');
Route::resource('orders', 'OrdersController');
Route::resource('pushs', 'PushsController');
