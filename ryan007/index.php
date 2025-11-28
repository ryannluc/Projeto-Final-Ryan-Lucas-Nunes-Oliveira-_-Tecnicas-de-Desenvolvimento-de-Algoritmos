<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ryan_</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.0/dist/flatly/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Biblioteca Alpha</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	        </li>
	        
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Bibliotecario
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-bibliotecario">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-bibliotecario">Listar</a></li>
	          </ul>
	        </li>

	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Leitor
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-leitor">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-leitor">Listar</a></li>
	          </ul>
	        </li>

	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Editoras
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-editora">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-editora">Listar</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="d-flex" role="search">
	        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
	        <button class="btn btn-outline-success" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>

	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<?php
				
				//arquivo de conexão
				include('config.php');
					switch (@$_REQUEST['page']) {
						// bibliotecario
						case 'cadastrar-bibliotecario':
							include('cadastrar-bibliotecario.php');
							break;
						case 'listar-bibliotecario':
							include('listar-bibliotecario.php');
							break;
						case 'editar-bibliotecario':
							include('editar-bibliotecario.php');
							break;
						case 'salvar-bibliotecario':
							include('salvar-bibliotecario.php');
							break;

						// leitor
						case 'cadastrar-leitor':
							include('cadastrar-leitor.php');
							break;
						case 'listar-leitor':
							include('listar-leitor.php');
							break;
						case 'editar-leitor':
							include('editar-leitor.php');
							break;
						case 'salvar-leitor':
							include('salvar-leitor.php');
							break;

						// editora
						case 'cadastrar-editora':
							include('cadastrar-editora.php');
							break;
						case 'listar-editora':
							include('listar-editora.php');
							break;
						case 'editar-editora':
							include('editar-editora.php');
							break;
						case 'salvar-editora':
							include('salvar-editora.php');
							break;

						// livro
						case 'cadastrar-livro':
							include('cadastrar-livro.php');
							break;
						case 'listar-livro':
							include('listar-livro.php');
							break;
						case 'editar-livro':
							include('editar-livro.php');
							break;
						case 'salvar-livro':
							include('salvar-livro.php');
							break;

						// emprestimo
						case 'cadastrar-emprestimo':
							include('cadastrar-emprestimo.php');
							break;
						case 'listar-emprestimo':
							include('listar-emprestimo.php');
							break;
						case 'editar-emprestimo':
							include('editar-emprestimo.php');
							break;
						case 'salvar-emprestimo':
							include('salvar-emprestimo.php');
							break;
						
						default:
							print "<h1>Seja Bem Vindo ao sistema da Biblioteca Alpha</h1>";
					}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>