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
	// Route::get('/', 'karyawancontroller@welcome');
	Route::get('/welcome', 'karyawancontroller@welcome');
	Route::get('/create', 'karyawancontroller@create');
	Route::post('/store', 'karyawancontroller@store');
	Route::get('/delete/{id}', 'karyawancontroller@delete');
	Route::get('/update/{id}', 'karyawancontroller@update');
	Route::post('/updateStore/{id}', 'karyawancontroller@updateStore');

	Route::get('/divisi', 'divisicontroller@welcome');
	Route::get('/createDiv', 'divisicontroller@create');
	Route::post('/storeDiv', 'divisicontroller@store');
	Route::get('/deleteDiv/{id}', 'divisicontroller@delete');
	Route::get('/updateDiv/{id}', 'divisicontroller@update');
	Route::post('/updateStoreDiv/{id}', 'divisicontroller@updateStore');

	Route::get('/user', 'usercontroller@welcome');
	Route::get('/createUser', 'usercontroller@create');
	Route::post('/storeUser', 'usercontroller@storeUser');
	Route::get('/deleteUser/{id}', 'usercontroller@delete');

});

Route::get('/', 'landingcontroller@index');

Route::get('/cetak_pdf', 'landingcontroller@cetak_pdf');
Route::get('/pdf', 'landingcontroller@buka');

Route::get('/karyawan/export_excel', 'karyawancontroller@export_excel');
Route::get('/divisi/export_excel', 'divisicontroller@export_excel');
Route::get('/user/export_excel', 'usercontroller@export_excel');
