@extends('layouts.app')	
@section('content') 

<div class="panel panel-default">
   <div class="panel-heading">Produtos</div>
   	  <div class="panel-body">
   	  	 
			@if(empty($produtos))
			 <div class="alert alert-danger">Você não tem nenhum produto cadastrado!</div>

			@else
			<!--<h1 class="">Listagem de Produtos</h1> -->

			<div class="table-responsive">
				<table class="table table-hover">
			    <!--<tbody>
			    	<td>Nome</td>
			    	<td>Valor</td>
			    	<td>Descrição</td>
			    	<td>Quantidade</td>
			    	<td>Opções</td>
			    </tbody> -->
				@foreach ($produtos as $p) 
				<tr class="{{$p->quantidade<=1 ? 'danger' : '' }}">
					<td>{{ $p->nome }}</td>
					<td>R$ {{ $p->valor }}</td>
					<td>{{ $p->descricao }}</td>
					<td>{{ $p->quantidade }}</td>
					<td>
					  <a href="{{ route('produtos.detalhes', ['id'=>$p->id]) }}">
					  	<span class="glyphicon glyphicon-search"></span>
					   </a>
			        </td>
			        <td>    
			           <a href="{{ route('produtos.remove', ['id'=>$p->id]) }}"><span class="glyphicon glyphicon-trash"></span>
					   </a>
					</td>
					<td>    
			           <a href="{{ route('produtos.editar', ['id'=>$p->id]) }}"><span class="glyphicon glyphicon-pencil"></span>
					   </a>
					</td>		 	
				</tr>
				@endforeach
			</table>
			</div>

			@endif

			<!--<h4>
				<span class="label label-danger pull-right">
					Um ou menos ítens no estoque.
				</span>
			</h4> -->

			@if(old('nome'))
				<div class="alert alert-success">
				    	<strong>Sucesso</strong> O produto {{ old('nome') }} foi adicionado!
				</div>
			@endif

			<!-- paginação -->
			{!! $produtos->render() !!}
			
   	  </div>
</div>

@stop 
