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

/*
* Rotas de Produtos 
*/
Route::group(['prefix'=>'produtos', 'where'=>['id'=>'[0-9]+']], function(){
   Route::get('', ['as'=>'produtos', 'uses'=>'ProdutosController@lista']);

   Route::get('detalhes/{id}', ['as'=>'produtos.detalhes', 'uses'=>'ProdutosController@detalhes']);

   Route::get('novo', ['as'=>'produtos.formulario', 'uses'=>'ProdutosController@novo']);

   Route::post('adiciona', ['as'=>'produtos.adiciona', 'uses'=>'ProdutosController@adiciona']);

   Route::get('remove/{id}', ['as'=>'produtos.remove', 'uses'=>'ProdutosController@remove']);

   Route::get('editar/{id}', ['as'=>'produtos.editar', 'uses'=>'ProdutosController@editar']);

   Route::post('atualiza/{id}', ['as'=>'produtos.atualiza', 'uses'=>'ProdutosController@atualiza']);

   Route::get('json', ['as'=>'produtos.json', 'uses'=>'ProdutosController@listaJson']);   
});

/*
* Rotas de Clientes 
*/

Route::group(['prefix'=>'clientes'], function() {
	Route::get('', ['as'=>'clientes', 'uses'=>'ClientesController@lista']);
	
	Route::get('form', ['as'=>'clientes', 'uses'=>'ClientesController@formCad']);
});

Route::auth();
Route::get('/home', 'HomeController@index');
