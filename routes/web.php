<?php

use Illuminate\Support\Facades\Route;
use App\TipoProduto;

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

Route::resource('tipoproduto', 'TipoProdutoController');
Route::resource('produto', 'ProdutoController');
Route::resource('endereco', 'EnderecoController');

// Rotas para o Controlador Pedido
Route::get('/pedido', 'PedidoController@index')->name('pedido.index');
Route::post('/pedido/{endereco_id}', 'PedidoController@store')->name('pedido.store');
Route::post('/pedido/enviarPedido/{pedido_id}', 'PedidoController@enviarPedido')->name('pedido.enviarPedido');

//Rotas para o Controlador PedidoProduto
Route::get('/pedidoproduto/getTodosProdutosDeTipo/{produto_id}', 'PedidoProdutoController@getTodosProdutosDeTipo')->name('pedidoproduto.getTodosProdutosDeTipo');
Route::get('/pedidoproduto/getPedidoProdutosList/{pedido_id}', 'PedidoProdutoController@getPedidoProdutosList')->name('pedidoproduto.getPedidoProdutosList');
Route::post('/pedidoproduto/{id_pedido}/{id_produto}/{id_endereco}/{quantidade}', 'PedidoProdutoController@store')->name('pedidoproduto.store');
