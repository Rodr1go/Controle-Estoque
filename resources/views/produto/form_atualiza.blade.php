@extends('layouts.app')
  @section('content')
    <div class="panel panel-default">
     <div class="panel-heading">Editar Produto: {{$p->nome}}</div>
      <div class="panel-body">  
         <form action="{{ route('produtos.atualiza', ['id'=>$p->id]) }}" method="post">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

            <div class="form-group">
    	     	<label>Nome</label>
    	     	<input name="nome"  class="form-control" value="{{$p->nome}}">
         	</div>
         	<div class="form-group">
    	     	<label>Descrição</label>
    	     	<input name="descricao" class="form-control" value="{{$p->descricao}}">
         	</div>
         	<div class="form-group">
    	     	<label>Valor</label>
    	     	<input name="valor" class="form-control" value="{{$p->valor}}">
         	</div>
         	<div class="form-group">
    	     	<label>Quantidade</label>
    	     	<input type="number" name="quantidade" class="form-control" value="{{$p->quantidade}}" ></div>
         	<button type="submit" class="btn btn-primary btn-block">Salvar</button>
         </form>
     </div>
     </div>
@stop