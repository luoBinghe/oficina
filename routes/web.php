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
    return view('orcamentos.adicionar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Orçamento
Route::get('/orcamento/listar', 'OrcamentoController@listar')->name('orcamentos.listar');
Route::get('/orcamento/adicionar', 'OrcamentoController@adicionar')->name('orcamentos.adicionar');
Route::post('/orcamento/salvar', 'OrcamentoController@salvar')->name('orcamentos.salvar');
Route::get('/orcamento/deletar/{id}', 'OrcamentoController@deletar')->name('orcamentos.deletar');
Route::get('/orcamento/editar/{id}', 'OrcamentoController@editar')->name('orcamentos.editar');
Route::put('/orcamento/atualizar/{id}', 'OrcamentoController@atualizar')->name('orcamentos.atualizar');
Route::get('/orcamento/pesquisar', 'OrcamentoController@pesquisar')->name('orcamentos.pesquisar');
// Route::get('/orcamento/pesquisar/data', 'OrcamentoController@pesquisarData')->name('orcamentos.pesquisarData');

