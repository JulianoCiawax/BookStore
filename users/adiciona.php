<?php
include_once("../header.php");
?>
<title>Adicionar Usuários</title>
</head>
<body>
	<?php
	include_once("usuarios_menu.php");
	?>
	<br><br>
	<br>
	<div class="container">
		<br>
		<div class="col-md-6 container panel panel-default ">
			<h3>Cadastro de Usuários</h3>
			<br />
			<form action="add.php" method="post" name="form1">
				<div class="form-group">
					<label for="username">Nome de Usuário</label>
					<input type="text" class="form-control" name="username" id="username" placeholder="Nome">
				</div>
				<div class="form-group">
					<label for="passcode">Senha</label>
					<input type="password" class="form-control" name="passcode" id="passcode" placeholder="Senha">
				</div>
				<div class="form-group">
					<label for="tipo">Tipo</label>
					<select name="tipo" id="tipo" class="form-control">
						<option value="">Selecione um tipo</option>
						<option value="Administrativo">Administrativo</option>
						<option value="Funcionário">Funcionario</option>
						<option value="Aluno">Aluno</option>
					</select>
				</div>
				<button type="submit" class="btn btn-success tn-lg btn-block" name="Submit"
					value="Adicionar">Adicionar</button>
			</form>
			<br />
		</div>
	</div>
	</div>
</body>
</html>