<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('produtos', [
	'middleware' => 'auth',
	'uses' => 'ProdutosController@lista'
]);

Route::get('/produtos/detalhes/{id}', [
	'middleware' => 'auth',
	'uses' => 'ProdutosController@detalhes'])->where('id', '[0-9]+'
);

Route::get('/produtos/novo', [
	'middleware' => 'auth',
	'uses' => 'ProdutosController@novo'
]);

Route::post('/produtos/adiciona', [
	'middleware' => 'auth',
	'uses' => 'ProdutosController@adiciona'
]);

Route::get('/produtos/remove/{id}', [
	'middleware' => 'auth',
	'uses' => 'ProdutosController@remove'
]);

Route::get('/produtos/editar/{id}', [
	'middleware' => 'auth',
	'uses' => 'ProdutosController@editar'
]);

Route::post('/produtos/atualiza/{id}', [
	'middleware' => 'auth',
	'uses' => 'ProdutosController@atualiza'
]);

Route::get('/produtos/json', 'ProdutosController@listaJson');



Route::auth();

Route::get('/home', 'HomeController@index');
