<?php
include_once("../config/config.php");
$result = mysqli_query($mysqli, "SELECT * FROM alunos ORDER BY id DESC");
?>
<?php
include_once("../header.php");
?>
	<title>Lista de Alunos</title>
</head>
<body>
<?php
include_once("alunos_menu.php");
?>
<br><br><br>
	<div class="container">
		<br>
		<div class="col-md-12 container panel panel-default ">			
			<h3>Lista de Alunos</h3>
			<br>
			<table class="table table-striped">
				<thead class="thead-inverse">
					<tr bgcolor='#CCCCCC'>
						<th>Nome</th>
						<th>Endereço</th>
						<th>Telefone</th>
						<th style='text-align:right'>Ações</th>
					</tr>
				</thead>
			<?php 
			while($res = mysqli_fetch_array($result)) { 		
				echo "<tr>";
				echo "<td>".$res['nome']."</td>";
				echo "<td>".$res['endereco']."</td>";
				echo "<td>".$res['telefone']."</td>";	
				echo "<td style='text-align:right'><a href=\"edit.php?id=$res[id]\" class='btn btn-info btn-sm'>Editar</a> <a href=\"delete.php?id=$res[id]\" class='btn btn-danger btn-sm' onClick=\"return confirm('Tem certeza de que deseja deletar?')\">Deletar</a></td>";		
			}
			?>
			</table>
			<br>
			<a href="adiciona.php" class="btn btn-success">Adicionar novo Aluno</a><br/><br/>
		</div>
	</div>
</body>
</html>