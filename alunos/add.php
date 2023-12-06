<?php
include_once("../header.php");
?> 
	<title>Adicionar Alunos</title>
</head>
<body>
<?php
include_once("alunos.php");
?>
<br><br><br>
	<div class="container">
		<div class="col-md-12">
<?php
include_once("../config/config.php");
if(isset($_POST['Submit'])) {	
	$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
	$endereco = mysqli_real_escape_string($mysqli, $_POST['endereco']);
	$telefone = mysqli_real_escape_string($mysqli, $_POST['telefone']);

	if(empty($nome) || empty($endereco) || empty($telefone)) {				
		if(empty($nome)) {
			echo "<font color='red'>Campo Nome está vazio.</font><br/>";
		}		
		if(empty($endereco)) {
			echo "<font color='red'>Campo Endereço está vazio.</font><br/>";
		}		
		if(empty($telefone)) {
			echo "<font color='red'>Campo Telefone está vazio.</font><br/>";
		}		
		echo "<br/><a href='javascript:self.history.back();' class='btn btn-warning'>Voltar</a>";
	} else { 
		$result = mysqli_query($mysqli, "INSERT INTO alunos(nome,endereco,telefone) VALUES('$nome','$endereco','$telefone')");
		echo "<a href='#' class='btn btn-block btn-success disabled'>Adicionado com Sucesso.</a>";
		echo "<br/><a href='alunos.php' class='btn btn-primary'>Ver resultados</a>";
	}
}
?>
</div>
</div>
</body>
</html>
