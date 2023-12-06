<?php
include_once("../config/config.php");
if(isset($_POST['update']))
{	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);	
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
	} else {	
		$result = mysqli_query($mysqli, "UPDATE alunos SET nome='$nome',endereco='$endereco',telefone='$telefone' WHERE id=$id");
		header("Location: alunos.php");
	}
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM alunos WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nome = $res['nome'];
	$endereco = $res['endereco'];
	$telefone = $res['telefone'];
}
?>
<?php
include_once("../header.php");
?> 
	<title>Editar Alunos</title>
</head>
<body>
<?php
include_once("alunos_menu.php");
?>
<br><br><br>
	<div class="container">
		<br>
			<div class="col-md-6 container panel panel-default ">
				<h3>Edita Aluno</h3>
				<br/>
	
				<form name="form1" method="post" action="edit.php">
					<div class="form-group">
						<label for="nome">Nome</label>
					 	<input type="text" class="form-control" name="nome" id="nome" value="<?php echo $nome;?>">
			  		</div>
					<div class="form-group">
						<label for="endereco">Endereço</label>
					 	<input type="text" class="form-control" name="endereco" id="endereco" value="<?php echo $endereco;?>">
			  		</div>	
					<div class="form-group">
						<label for="telefone">Telefone</label>
					 	<input type="text" class="form-control" name="telefone" id="telefone" value="<?php echo $telefone;?>">
			  		</div>	
					<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
					<input type="submit" name="update" class="btn btn-success tn-lg btn-block" value="Atualizar">
				</form>
				<br>
		</div>
	</div>
</body>
</html>
