<?php

namespace CRUD\Http\Controllers;
use Illuminate\Support\Facades\DB;
use CRUD\Produto; //Importando o módel
use CRUD\Http\Requests\ProdutosRequest;//Classe de validação
use Request;

class ProdutosController extends Controller {
	public function lista(){
		

		/* Código sem Eloquent ORM
		$produtos = DB::select('select * from produtos'); 
		
		return view('produto.listagem')->with('produtos', $produtos);*/

        //Código com Eloquent ORM
		$produtos = Produto::all();
		return view('produto.listagem')->with('produtos', $produtos);
	}

	public function detalhes($id){
		
		//$id = Request::route('id');
		$produto = Produto::find($id);

		if(empty($produto)){
			return "Este produto não existe!";
		}
		return view('produto.detalhes')->with('p', $produto);
	}

	public function novo(){
		return view('produto.formulario');
	}

	public function adiciona(ProdutosRequest $req){
		
        Produto::create($req->all());
  
        return redirect()->action('ProdutosController@lista')->withInput(Request::only('nome'));

        //Código sem ORM
        /*$nome = Request::input('nome');
		$descricao = Request::input('descricao');
		$valor = Request::input('valor');
		$quantidade = Request::input('quantidade');*/

        /*DB::insert('insert into produtos(nome, descricao, valor, quantidade) values (?,?,?,?)', array($nome, $descricao, $valor, $quantidade));*/
  
	}

    public function remove($id){
    	$produto = Produto::find($id);
    	$produto->delete();

    	return redirect()->action('ProdutosController@lista');
    }

    public function editar($id){
    	$produto = Produto::find($id);
		return view('produto.form_atualiza')->with('p', $produto);
	}

    public function atualiza($id){
    	$produto = Produto::find($id)->update(Request::all()); 
    	return redirect()->action('ProdutosController@lista');
    }

	public function listaJson(){
		$produtos = Produto::all();
		return response()->json($produtos);
	}
}