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
                <div class="col-md-5">
			     	<div class="form-group">
				     	<label>Bairro:</label>
				     	<input name="bairro" class="form-control" value="{{ old('bairro') }}">
			     	</div>
			    </div>

			    <div class="col-md-1"> 	
			     	<div class="form-group"> 
				     	<label for="uf">UF: </label>
				     	<select id="uf">
				     		<option value="0">AC</option>
				     		<option value="1">AL</option>
				     		<option value="2">AP</option>
				     		<option value="3">AM</option>
				     		<option value="4">BA</option>
				     		<option value="5">CE</option>
				     		<option value="6">DF</option>
				     		<option value="7">ES</option>
				     		<option value="8">GO</option>
				     		<option value="9">MA</option>
				     		<option value="10">MT</option>
				     		<option value="11">MS</option>
				     		<option value="12">MG</option>
				     		<option value="13">PR</option>
				     		<option value="14">PB</option>
				     		<option value="15">PA</option>
				     		<option value="16">PE</option>
				     		<option value="17">PI</option>
				     		<option value="18">RJ</option>
				     		<option value="19">RN</option>
				     		<option value="20">RS</option>
				     		<option value="21">RO</option>
				     		<option value="22">RR</option>
				     		<option value="23">SC</option>
				     		<option value="24">SE</option>
				     		<option value="25">SP</option>
				     		<option value="26">TO</option>
				     	</select>
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
	     	    <div class="col-md-3">
			     	<div class="form-group">
				     	<label>Telefone:</label>
				     	<input name="telefone" class="form-control" value="{{ old('telefone') }}">
			     	</div>
		     	</div>

		     	<div class="col-md-3">
			     	<div class="form-group">
				     	<label>Celular:</label>
				     	<input name="celular" class="form-control" value="{{ old('celular') }}">
			     	</div>
		     	</div>

		     	<div class="col-md-6">
			     	<div class="form-group">
			     	    <label>Email</label>
			     	    <input name="email" class="form-control" value="{{ old('email') }}">
		     	    </div>
	     	    </div>
	     	</div>
	     	
	     	<div class="how">
	     	    <div class="col-md-5"></div>
	     	    <div class="col-md-5"></div>
		     	<div class="form-group">
		     	    <div class="col-md-2">
				     	<button type="submit" class="btn btn-success">Salvar</button>
				     	<a href="/clientes" class="btn btn-default">Cancelar</a>
			     	</div>
		     	</div>	     	
	     	</div>
	     </form>
     </div>
     </div>
@stop