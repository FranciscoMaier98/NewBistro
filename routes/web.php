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

Route::get('/detalhes/{produto}', 'App\Http\Controllers\DetalhesController@index')->name('site.detalhes');

Route::post('/adicionar', 'App\Http\Controllers\AdicionarController@index')->name('adicionar');

Route::get('/carrinho', 'App\Http\Controllers\CarrinhoController@index')->name('site.carrinho');
Route::post('/excluir', 'App\Http\Controllers\CarrinhoController@excluir')->name('site.excluir');
Route::get('/finalizar', 'App\Http\Controllers\CarrinhoController@finalizar')->name('finalizar');

