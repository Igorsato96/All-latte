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
Route::get('/', function () {
    return view('home');
});
Route::get('/logout', 'LogoutController@destroy');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bebidas',  [
    'uses' => 'ProdutosController@getBebidas',
    'as' => 'product.index'
]);
Route::get('/cardapio', function () {
    return view('/site/cardapio');
});
Route::get('/duvidas', function () {
    return view('/site/duvidas');
});
Route::get('/nossocafe',  [
    'uses' => 'ProdutosController@getCafe',
    'as' => 'product.index'
]);
Route::get('/novidades', function () {
    return view('/site/novidades');
});
Route::get('/receitas', function () {
    return view('/site/receitas');
});
Route::get('/salgados', function () {
    return view('/site/salgados');
});
Route::get('/sobre-nós', function () {
    return view('/site/sobre-nós');
});
Route::get('/sobremesas', function () {
    return view('/site/sobremesas');
});
Route::get('/termos', function () {
    return view('/site/termos');
});
Route::get('/pedidos', 'CarrinhoController@index') -> name('/site/pedidos');