<?php
include_once("../config/config.php");

if (isset($_POST['update'])) {
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
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
	} else {
		$result = mysqli_query($mysqli, "UPDATE admin SET username='$username',passcode='$passcode',tipo='$tipo' WHERE id=$id");
		header("Location: usuarios.php");
	}
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM admin WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
	$username = $res['username'];
	$passcode = $res['passcode'];
	$tipo = $res['tipo'];
}
?>
<?php
include_once("../header.php");
?>
<title>Editar Usuários</title>
</head>

<body>
	<?php
	include_once("usuarios_menu.php");
	?>
	<br><br><br>
	<div class="container">
		<br>
		<div class="col-md-6 container panel panel-default ">
			<h3>Editar Usuário</h3>
			<br />
			<form name="form1" method="post" action="edit.php">
				<div class="form-group">
					<label for="username">Nome de Usuário</label>
					<input type="text" class="form-control" name="username" id="username"
						value="<?php echo $username; ?>">
				</div>
				<div class="form-group">
					<label for="passcode">Senha</label>
					<input type="password" class="form-control" name="passcode" id="passcode"
						value="<?php echo $passcode; ?>">
				</div>
				<div class="form-group">
					<label for="tipo">Tipo</label>
					<select name="tipo" id="tipo" class="form-control">
						<option value="<?php echo $tipo; ?>">
							<?php echo $tipo; ?>
						</option>
						<option value="Administrativo">Administrativo</option>
						<option value="Funcionário">Funcionário</option>
						<option value="Aluno">Aluno</option>
					</select>
				</div>
				<input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
				<input type="submit" name="update" value="Atualizar" class="btn btn-success tn-lg btn-block">
			</form>
			<br>
		</div>
	</div>
</body>

</html>