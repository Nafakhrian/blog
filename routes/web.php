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
Route::get('/', 'karyawancontroller@welcome');
Route::get('/welcome', 'karyawancontroller@welcome');

Route::get('/create', 'karyawancontroller@create');
Route::post('/store', 'karyawancontroller@store');
Route::get('/delete/{id}', 'karyawancontroller@delete');
