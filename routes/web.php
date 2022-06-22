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

Route::any('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.principal');
Route::post('/autenticar', 'App\Http\Controllers\PrincipalController@autenticar')->name('site.autenticar');
Route::post('/cadastro', 'App\Http\Controllers\PrincipalController@store')->name('site.cadastro');

Route::get('/login', 'App\Http\Controllers\LoginController@login')->name('site.login');
Route::post('/login', 'App\Http\Controllers\LoginController@store')->name('site.chamado');
Route::get('/sair', 'App\Http\Controllers\LoginController@sair')->name('site.sair');


Route::get('/login', 'App\Http\Controllers\RegistroController@index')->name('site.registro');

// testes
Route::any('/teste', 'App\Http\Controllers\TesteController@index')->name('site.teste');