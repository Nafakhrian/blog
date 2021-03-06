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

Route::get('/login', 'Admin\usercontroller@index')->name('login');
Route::post('/postLogin', 'Admin\usercontroller@postLogin');
Route::get('/register', 'Admin\usercontroller@register');
Route::post('/storeLogin', 'Admin\usercontroller@store');
Route::get('/logout', 'Admin\usercontroller@logout');

Route::group(['middleware' => 'auth'], function(){
	// Route::get('/', 'karyawancontroller@welcome');
	Route::get('/welcome', 'Admin\karyawancontroller@welcome');
	Route::get('/create', 'Admin\karyawancontroller@create');
	Route::post('/store', 'Admin\karyawancontroller@store');
	Route::get('/delete/{id}', 'Admin\karyawancontroller@delete');
	Route::get('/update/{id}', 'Admin\karyawancontroller@update');
	Route::post('/updateStore/{id}', 'Admin\karyawancontroller@updateStore');

	Route::get('/divisi', 'Admin\divisicontroller@welcome');
	Route::get('/createDiv', 'Admin\divisicontroller@create');
	Route::post('/storeDiv', 'Admin\divisicontroller@store');
	Route::get('/deleteDiv/{id}', 'Admin\divisicontroller@delete');
	Route::get('/updateDiv/{id}', 'Admin\divisicontroller@update');
	Route::post('/updateStoreDiv/{id}', 'Admin\divisicontroller@updateStore');

	Route::get('/user', 'Admin\usercontroller@welcome');
	Route::get('/createUser', 'Admin\usercontroller@create');
	Route::post('/storeUser', 'Admin\usercontroller@storeUser');
	Route::get('/deleteUser/{id}', 'Admin\usercontroller@delete');

});

Route::get('/', 'landingcontroller@index');
Route::get('/cetak_pdf', 'landingcontroller@cetak_pdf');
Route::get('/pdf', 'landingcontroller@buka');

Route::get('/karyawan/export_excel', 'Admin\karyawancontroller@export_excel');
Route::get('/divisi/export_excel', 'Admin\divisicontroller@export_excel');
Route::get('/user/export_excel', 'Admin\usercontroller@export_excel');
