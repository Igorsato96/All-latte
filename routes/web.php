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

Auth::routes();

Route::get('', function () {
    return view('home');
});

Route::get('logout', 'LogoutController@logout');

Route::get('home', 'HomeController@index')->name('home');

Route::get('cardapio','CardapioController@getCategory',);

Route::get('duvidas', function () {
    return view('/site/duvidas');
});
Route::get('novidades', function () {
    return view('/site/novidades');
});

Route::get('receitas', function () {
    return view('/site/receitas');
});

Route::get('sobre-nós', function () {
    return view('/site/sobre-nós');
});

Route::get('termos', function () {
    return view('/site/termos');
});

Route::get('menuprofile', function () {
    return view('/site/menuprofile');
});

Route::get('perfil', function () {
    return view('/site/perfil');
});
Route::get('pedidos', function () {
    return view('/site/pedidos');
});
Route::get('cartao', function () {
    return view('/site/cartao');
});
Route::get('add-card', function () {
    return view('/site/add-card');
});

Route::get('endereco', 'EnderecoController@indexPerfil')->name('endereco');

Route::get('products/{id}', 'ProdutosController@show');

Route::get('perfil', 'PerfilController@index')->name('perfil');
Route::put('perfil', 'PerfilController@update')->name('perfil.update');


Route::resource('add-endereco', 'EnderecoController');



Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index');
Route::get('/carrinho/adicionar', function() {
    return redirect()->route('index');
});
Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('carrinho.adicionar');
Route::delete('/carrinho/remover', 'CarrinhoController@remover')->name('carrinho.remover'); 
Route::post('/carrinho/concluir', 'CarrinhoController@concluir')->name('carrinho.concluir');
Route::get('pedidos', 'CarrinhoController@compras')->name('carrinho.compras');



Route::get('painelprodutos', 'AdminController@ProdutoView')->name('painelprodutos')->middleware('checkAdmin');

Route::resource('add-produtos', 'AdminController')->middleware('checkAdmin');

Route::get('admin', 'AdminController@AdminPainel')->name('admin')->middleware('checkAdmin');