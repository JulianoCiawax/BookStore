<?php
include_once("../config/config.php");
$result = mysqli_query($mysqli, "SELECT * FROM atendimentos WHERE tipo IN (SELECT id FROM servicos WHERE tipo = 'Atendimento') ORDER BY id DESC");
?>
<?php
include_once("../header.php");
?>
	<title>Lista de Atendimentos</title>
</head>
<body>
<?php
include_once("atendelista_menu.php");
?>
<br><br><br>
	<div class="container">
		<br>
		<div class="col-md-12 container panel panel-default ">	
			<h3>Lista de Atendimentos</h3>
			<br>
			<table class="table table-striped">
				<thead class="thead-inverse">
					<tr bgcolor='#CCCCCC'>
						<th>Livro</th>
						<th>Tipo</th>
						<th>Autor</th>
						<th style='text-align:right;'>Ações</th>
					</tr>
				</thead>
				<?php 
				while($res = mysqli_fetch_array($result)) { 		
					echo "<tr>";					
					$livro = $res['livro'];
					$row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT nome FROM livros WHERE id = $livroId "));
					echo "<td> {$row['nome']} </td>";
					$tipoId = $res['tipo'];
					$row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT nome FROM autor WHERE id = $tipoId "));
					echo "<td> {$row['nome']} </td>";
					echo "<td>".$res['autor']."</td>";
					echo "<td>".$res['situacao']."</td>";
					
					if($res['situacao'] != 'CONCLUIDO'){
						echo "<td style='text-align:right'>
								<a href=\"edit.php?id=$res[id]\" class='btn btn-warning btn-sm'>Atender</a></td>";	
					}else{
						echo "<td style='text-align:right'>
								<a href=\"edit.php?id=$res[id]\" class='btn btn-success btn-sm'>Visualizar/Editar</a></td>";	
					}
				}
				?>
			</table>
			<br>
		</div>
	</div>
</body>
</html>