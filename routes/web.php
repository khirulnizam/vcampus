<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route to latihan
//web.php
//Route::get('/latihan/create', 'LatihanController@create');
//Route::post('/latihan/create', 'LatihanController@store');
//combo
Route::resource('latihan', LatihanController::class);

//penceramah
Route::resource('penceramah', PenceramahController::class);