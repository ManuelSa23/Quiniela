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

/*Route Auth */
Route::get('/login', 'App\Http\Controllers\ConnectController@getLogin')->name('login');
Route::post('/login', 'App\Http\Controllers\ConnectController@postLogin')->name('login');
Route::get('/registra', 'App\Http\Controllers\ConnectController@getRegistra')->name('registra');
Route::post('/registra', 'App\Http\Controllers\ConnectController@postRegistra')->name('registra');
Route::get('/logout', 'App\Http\Controllers\ConnectController@getLogout')->name('logout');