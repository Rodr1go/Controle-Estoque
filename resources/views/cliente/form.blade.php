@extends('layouts.app')
 @section('content')

   <div class="panel panel-default">
     <div class="panel-heading">Novo Cliente</div>
   	  <div class="panel-body">
     
	     @if(count($errors) > 0)
		     <div class="alert alert-danger"> 
			     <ul>
			     @foreach($errors->all() as $error)
			        <li> {{$error}} </li>
			     @endforeach    
			     </ul>
		     </div>
	     @endif
	     <form action="/clientes/cadastra" method="post">
	        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
             
	        <div class="how">
	            <div class="col-md-5" >
	                <div class="form-group">    
		     	        <label>Nome:</label>
		     	        <input name="nome" class="form-control" value="{{ old('nome') }}">
		     	    </div>
		     	</div> 
	     	    <div class="col-md-7" >    
			     	<div class="form-group">
				     	<label>Endereço:</label>
				     	<input name="endereco" class="form-control" value="{{ old('endereco') }}">
			     	</div>
                </div>
	     	</div> 
            
            <div class="how">
                <div class="col-md-6">
			     	<div class="form-group">
				     	<label>Bairro:</label>
				     	<input name="bairro" class="form-control" value="{{ old('bairro') }}">
			     	</div>
			    </div>
			    <div class="col-md-6"> 	
			     	<div class="form-group">
				     	<label>Cidade:</label>
				     	<input name="cidade" class="form-control" value="{{ old('cidade') }}">
			     	</div>
		     	</div>
	     	</div>

	     	<div class="how">
	     	    <div class="col-md-4">
			     	<div class="form-group">
				     	<label>Telefone:</label>
				     	<input name="telefone" class="form-control" value="{{ old('telefone') }}">
			     	</div>
		     	</div>
		     	<div class="col-md-4">
			     	<div class="form-group">
				     	<label>Celular:</label>
				     	<input name="celular" class="form-control" value="{{ old('celular') }}">
			     	</div>
		     	</div>
		     	<div class="col-md-4">
			     	<div class="form-group">
			     	    <label>Email</label>
			     	    <input name="email" class="form-control" value="{{ old('email') }}">
		     	    </div>
	     	    </div>
	     	</div>
	     	
	     	<div class="how">
	     	    <div class="col-md-4"></div>
	     	    <div class="col-md-4"></div>
	     	    <div class="col-md-4">
			     	<button type="submit" class="btn btn-primary btn-block">Salvar</button>
		     	</div>
		     	
	     	</div>
	     </form>
     </div>
     </div>
@stop