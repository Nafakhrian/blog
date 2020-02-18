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

Route::get('/login', 'usercontroller@index')->name('login');
Route::post('/postLogin', 'usercontroller@postLogin');
Route::get('/register', 'usercontroller@register');
Route::post('/storeLogin', 'usercontroller@store');
Route::get('/logout', 'usercontroller@logout');


Route::group(['middleware' => 'auth'], function(){
	Route::get('/', 'karyawancontroller@welcome');
	Route::get('/welcome', 'karyawancontroller@welcome');
	Route::get('/search', 'karyawancontroller@search');
	Route::get('/create', 'karyawancontroller@create');
	Route::post('/store', 'karyawancontroller@store');
	Route::get('/delete/{id}', 'karyawancontroller@delete');
	Route::get('/update/{id}', 'karyawancontroller@update');
	Route::post('/updateStore/{id}', 'karyawancontroller@updateStore');

	Route::get('/createDiv', 'divisicontroller@create');
	Route::post('/storeDiv', 'divisicontroller@store');
	Route::get('/deleteDiv/{id}', 'divisicontroller@delete');
	Route::get('/updateDiv/{id}', 'divisicontroller@update');
	Route::post('/updateStoreDiv/{id}', 'divisicontroller@updateStore');
});