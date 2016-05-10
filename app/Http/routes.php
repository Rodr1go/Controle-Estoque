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

Route::get('produtos', 'ProdutosController@lista'
);

Route::get('/produtos/detalhes/{id}', 'ProdutosController@detalhes')->where('id', '[0-9]+'
);

Route::get('/produtos/novo', 'ProdutosController@novo'
);

Route::post('/produtos/adiciona',  'ProdutosController@adiciona'
);

Route::get('/produtos/remove/{id}', 'ProdutosController@remove'
);

Route::get('/produtos/editar/{id}', 'ProdutosController@editar'
);

Route::post('/produtos/atualiza/{id}', 'ProdutosController@atualiza'
);

Route::get('/produtos/json', 'ProdutosController@listaJson');



Route::auth();

Route::get('/home', 'HomeController@index');
