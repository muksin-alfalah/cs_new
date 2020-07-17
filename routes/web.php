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


Route::get('/admin/cs', 'Admin\AdminController@index');

Route::group(['prefix' => 'operasional'], function() {
	Route::get('/', 'OperasionalController@index');
	Route::get('/get-data', 'OperasionalController@fetch_data')->name('operasional.fetch-data');
});
