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

Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.principal');
Route::get('/login', 'App\Http\Controllers\LoginController@login')->name('site.login');
Route::post('/login', 'App\Http\Controllers\LoginController@autenticar')->name('site.login');