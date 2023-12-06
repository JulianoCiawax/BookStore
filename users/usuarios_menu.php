<?php
include('session.php');
?>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
				aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="../index.php">BookStore</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class=""><a href="../index.php">Home</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
						aria-haspopup="true" aria-expanded="false">Biblioteca <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../livros/adiciona.php">Cadastrar Livros</a></li>
						<li><a href="../livros/livros.php">Listar Livros</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
						aria-haspopup="true" aria-expanded="false">Alunos <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../alunos/adiciona.php">Cadastrar Alunos</a></li>
						<li><a href="../alunos/alunos.php">Listar Alunos</a></li>
					</ul>
				</li>
				<li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
						aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="adiciona.php">Cadastro de Usuários</a></li>
						<li><a href="usuarios.php">Lista de Usuários</a></li>
				</ul>
				</li>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="../sobre.php">Sobre</a></li>
				<li><a href="../logout.php">Sair</a></li>
			</ul>
		</div>
</nav>