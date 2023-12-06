<?php
include_once("../header.php");
?>
<title>Adicionar Livros</title>
</head>
<body>
	<?php
	// include_once("livros.php");
	?>
	<br><br><br>
	<div class="container">
		<div class="col-md-12">
			<?php
			include_once("../config/config.php");
			if (isset($_POST['Submit'])) {
				$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
				$autor = mysqli_real_escape_string($mysqli, $_POST['autor']);
				$tipo = mysqli_real_escape_string($mysqli, $_POST['tipo']);

				if (empty($nome) || empty($autor) || empty($tipo)) {
					if (empty($nome)) {
						echo "<font color='red'>Campo Nome está vazio.</font><br/>";
					}
					if (empty($autor)) {
						echo "<font color='red'>Campo Autor está vazio.</font><br/>";
					}
					if (empty($tipo)) {
						echo "<font color='red'>Campo Tipo está vazio.</font><br/>";
					}
					echo "<br/><a href='javascript:self.history.back();' class='btn btn-warning'>Voltar</a>";
				} else {
					$result = mysqli_query($mysqli, "INSERT INTO livros(nome,autor,tipo) VALUES('$nome','$autor','$tipo')");
					echo "<a href='#' class='btn btn-block btn-success disabled'>Adicionado com Sucesso.</a>";
					echo "<br/><a href='livros.php' class='btn btn-primary'>Ver resultados</a>";
				}
			}
			?>
		</div>
	</div>
</body>
</html>