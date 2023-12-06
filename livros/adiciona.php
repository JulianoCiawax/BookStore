<?php
include_once("../header.php");
$result_alunos = mysqli_query($mysqli, "SELECT * FROM alunos ORDER BY id DESC");
?> 
	<title>Adicionar Livros</title>
</head>
<body>
<?php
include_once("livros_menu.php");
?>
<br><br>
<br>
<div class="container">
		<br>
			<div class="col-md-6 container panel panel-default ">
				<h3>Cadastro de Livros</h3>
				<br/>
				<form action="add.php" method="post" name="form1">
					<div class="form-group">
						<label for="nome">Nome</label>
					 	<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
			  		</div>
					<div class="form-group">
						<label for="autor">Autor</label>
					 	<input type="text" class="form-control" name="autor" id="autor" placeholder="Autor">
			  		</div>		
					<div class="form-group">
						<label for="tipo">Tipo</label>
						<select name="tipo" id="tipo" class="form-control">
					  		<option value="">Selecione um tipo</option>
					  		<option value="Outros">Outros</option>
						</select>
			  		</div>	
					<button type="submit" class="btn btn-success tn-lg btn-block" name="Submit" value="Adicionar">Adicionar</button>
				</form>
				<br/>
			</div>
		</div>
	</div>
</body>
</html>