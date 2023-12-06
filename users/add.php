<?php
include_once("../header.php");
?>
<title>Cadastrar Usuários</title>
</head>
<body>
	<?php
	include_once("usuarios_menu.php");
	?>
	<br><br><br>
	<div class="container">
		<div class="col-md-12">
			<?php
			include_once("../config/config.php");
			if (isset($_POST['Submit'])) {
				$username = mysqli_real_escape_string($mysqli, $_POST['username']);
				$passcode = mysqli_real_escape_string($mysqli, $_POST['passcode']);
				$tipo = mysqli_real_escape_string($mysqli, $_POST['tipo']);
				if (empty($username) || empty($passcode) || empty($tipo)) {
					if (empty($username)) {
						echo "<font color='red'>Campo Nome está vazio.</font><br/>";
					}
					if (empty($passcode)) {
						echo "<font color='red'>Campo Senha está vazio.</font><br/>";
					}
					if (empty($tipo)) {
						echo "<font color='red'>Campo Tipo está vazio.</font><br/>";
					}
					echo "<br/><a href='javascript:self.history.back();' class='btn btn-warning'>Voltar</a>";
				} else {
					$result = mysqli_query($mysqli, "INSERT INTO admin(username,passcode,tipo) VALUES('$username','$passcode','$tipo')");
					echo "<a href='#' class='btn btn-block btn-success disabled'>Adicionado com Sucesso.</a>";
					echo "<br/><a href='usuarios.php' class='btn btn-primary'>Ver resultados</a>";
				}
			}
			?>
		</div>
	</div>
</body>
</html>