<?php
include_once("../config/config.php");

if(isset($_POST['update']))
{	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);	
	$livro = mysqli_real_escape_string($mysqli, $_POST['livro']);
	$tipo = mysqli_real_escape_string($mysqli, $_POST['tipo']);	

	if(empty($livro) || empty($tipo)) {				
		if(empty($livro)) {
			echo "<font color='red'>Campo Livro está vazio.</font><br/>";
		}		
		if(empty($tipo)) {
			echo "<font color='red'>Campo Tipo está vazio.</font><br/>";
		}
	} else {	
		$result = mysqli_query($mysqli, "UPDATE atendimentos SET livro='$livro',autor='$autor',tipo='$tipo',situacao='CONCLUIDO' WHERE id=$id");
		header("Location: atendelista.php");
	}
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM atendimentos WHERE id=$id");
$result_livros = mysqli_query($mysqli, "SELECT * FROM livro ORDER BY id DESC");
$result_servicos = mysqli_query($mysqli, "SELECT * FROM autor ORDER BY id DESC");

while($res = mysqli_fetch_array($result))
{
	$livro = $res['livro'];
	$tipo = $res['tipo'];
	$autor = $res['autor'];
}
?>
<?php
include_once("../header.php");
?> 
	<title>Atender Serviço</title>
</head>

<body>
<?php
include_once("atendelista_menu.php");
?>
<br><br><br>
<div class="container">
		<br>
			<div class="col-md-6 container panel panel-default ">
				<h3>Atender Serviço</h3>
				<br/>	
				<form name="form1" method="post" action="edit.php">
					<div class="form-group">
						<label for="livro">Livros</label>
					 	<select name="livro" id="livro" class="form-control" readonly>
					  		<?php $row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM livros WHERE id = $livro")); ?>
					  		<option value="<?php echo $livro;?>"><?php echo $row['nome'];?></option>
						</select>
			  		</div>
					<div class="form-group">
						<label for="tipo">Tipo</label>
						<select name="tipo" id="tipo" class="form-control" readonly>
					  		<?php $row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM tipo WHERE id = $tipo")); ?>
					  		<option value="<?php echo $tipo;?>"><?php echo $row['nome'];?></option>
						</select>
			  		</div>	

					<div class="form-group">
						<label for="autor">Autor</label>
					 	<input type="text" class="form-control" name="autor" id="autor" value="<?php echo $observacoes;?>">
			  		</div>
				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
				<input type="submit" name="update" class="btn btn-success tn-lg btn-block"  value="Finalizar">
			</tr>
		</table>
	</form>
	<br>
	</div>
	</div>
</body>
</html>
