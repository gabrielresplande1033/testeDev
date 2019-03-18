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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'ClienteController@index')->name('home');
Route::post('inserirCliente', 'ClienteController@inserirCliente')->name('inserirCliente');
Route::post('inserirProduto', 'ProdutoController@inserirProduto')->name('inserirProduto');
Route::put('editarProduto', 'ProdutoController@editarProduto')->name('editarProduto');
Route::post('inserirNota', 'NotaController@inserirNota')->name('inserirNota');
Route::get('retornarProdutos', 'ProdutoController@retornarProdutos')->name('retornarProdutos');
Route::get('retornarClientes', 'ClienteController@retornarClientes')->name('retornarClientes');
Route::delete('removeProdutos', 'ProdutoController@removeProdutos')->name('removeProdutos');
Route::put('atualizarCliente/{id}', 'ClienteController@atualizarCliente')->name('atualizarCliente');
Route::delete('deletarCliente/{id}', 'ClienteController@deletarCliente')->name('deletarCliente');

