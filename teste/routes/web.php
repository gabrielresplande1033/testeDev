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
Route::post('gerarPDF', 'NotaController@gerarPDF')->name('gerarPDF');
Route::post('inserirCliente', 'ClienteController@inserirCliente')->name('inserirCliente');
Route::post('inserirProduto', 'ProdutoController@inserirProduto')->name('inserirProduto');
Route::put('editarProduto', 'ProdutoController@editarProduto')->name('editarProduto');
Route::put('editarCliente', 'ClienteController@editarCliente')->name('editarCliente');
Route::post('inserirNota', 'NotaController@inserirNota')->name('inserirNota');
Route::get('retornarProdutos', 'ProdutoController@retornarProdutos')->name('retornarProdutos');
Route::get('retornarClientes', 'ClienteController@retornarClientes')->name('retornarClientes');
Route::get('retornarNotas', 'NotaController@retornarNotas')->name('retornarNotas');
Route::delete('removeProdutos', 'ProdutoController@removeProdutos')->name('removeProdutos');
Route::delete('removeClientes', 'ClienteController@removeClientes')->name('removeClientes');
Route::delete('removeNotas', 'NotaController@removeNotas')->name('removeNotas');
Route::put('atualizarCliente/{id}', 'ClienteController@atualizarCliente')->name('atualizarCliente');
Route::delete('deletarCliente/{id}', 'ClienteController@deletarCliente')->name('deletarCliente');

