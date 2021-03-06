<?php

namespace CRUD\Http\Controllers;
use Illuminate\Support\Facades\DB;
use CRUD\Produto; //Importando o model
use CRUD\Http\Requests\ProdutosRequest;//Classe de validação
use Request;

class ProdutosController extends Controller {
	
	public function __construct(){
		$this->middleware('auth');

	}

	public function lista(){
		
		/* Código sem Eloquent ORM
		$produtos = DB::select('select * from produtos'); 
		
		return view('produto.listagem')->with('produtos', $produtos);*/

        //Código com Eloquent ORM
		$produtos = Produto::paginate(10);
		return view('produto.listagem', ['produtos'=>$produtos]);
	}

	public function detalhes($id){
		
		//$id = Request::route('id');
		$produto = Produto::find($id);

		if(empty($produto)){
			return "Este produto não existe!";
		}
		return view('produto.detalhes', ['p'=>$produto]);
	}

	public function novo(){
		return view('produto.formulario');
	}

	public function adiciona(ProdutosRequest $req){
		
        Produto::create($req->all());
  
        return redirect()->route('produtos')->withInput(Request::only('nome'));

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

    	return redirect()->route('produtos');
    }

    public function editar($id){
    	$produto = Produto::find($id);
		return view('produto.form_atualiza', ['p'=>$produto]);
	}

    public function atualiza($id){
    	$produto = Produto::find($id)->update(Request::all()); 
    	return redirect()->route('produtos');
    }

	public function listaJson(){
		$produtos = Produto::all();
		return response()->json($produtos);
	}
}