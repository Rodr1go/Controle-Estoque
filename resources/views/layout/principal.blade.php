<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
	<title>Controle de estoque</title>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{action('ProdutosController@lista')}}">
						Produtos em Estoque
					</a>
				</div>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{action('ProdutosController@lista')}}">Listagem</a></li>
					<li><a href="{{action('ProdutosController@novo')}}">Novo</a></li>
				</ul>
			</div>
		</nav>

		@yield('conteudo')

    <footer class="footer">
    	<p>© Todos os direitos Reservados.</p>
    </footer>   

	</div>
</body>
</html>