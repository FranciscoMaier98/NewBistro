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

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('site.home');
Route::get('/sobre/horario', 'App\Http\Controllers\HorarioController@index')->name('site.sobre.horario');
Route::get('/sobre/entrega', 'App\Http\Controllers\EntregaController@index')->name('site.sobre.entrega');
Route::get('/sobre/contato', 'App\Http\Controllers\ContatoController@index')->name('site.sobre.contato');