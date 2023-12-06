<?php
include_once("../config/config.php");

if(isset($_POST['update'])) {
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
	$autor = mysqli_real_escape_string($mysqli, $_POST['autor']);
	$tipo = mysqli_real_escape_string($mysqli, $_POST['tipo']);

	if(empty($nome) || empty($autor) || empty($tipo)) {
		if(empty($nome)) {
			echo "<font color='red'>Campo Nome está vazio.</font><br/>";
		}
		if(empty($tipo)) {
			echo "<font color='red'>Campo Autor está vazio.</font><br/>";
		}
		if(empty($autor)) {
			echo "<font color='red'>Campo Tipo está vazio.</font><br/>";
		}
	} else {
		$result = mysqli_query($mysqli, "UPDATE livros SET nome='$nome',autor='$autor',tipo='$tipo' WHERE id=$id");
		header("Location: livros.php");
	}
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM livros WHERE id=$id");
$result_alunos = mysqli_query($mysqli, "SELECT * FROM alunos ORDER BY id DESC");

while($res = mysqli_fetch_array($result)) {
	$nome = $res['nome'];
	$autor = $res['autor'];
	$tipo = $res['tipo'];
}
?>
<?php
include_once("../header.php");
include_once("../livros/livros_menu.php");
?>
<title>Editar Livros</title>
</head>

<body>
    <div class="container">
        <?php
		include_once("../livros/livros_menu.php");
		?>
        <br><br><br>
        <div class="col-md-6 container panel panel-default ">
            <h3>Editar Livro</h3>
            <br />
            <form name="form1" method="post" action="edit.php">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $nome; ?>">
                </div>
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" name="autor" id="autor" value="<?php echo $autor; ?>">
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo" class="form-control">
                        <option value="<?php echo $tipo; ?>">
                            <?php echo $tipo; ?>
                        </option>
                        <option value="Outros">Outros</option>
                    </select>
                </div>
                <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                <input type="submit" name="update" class="btn btn-success tn-lg btn-block" value="Atualizar">
                </tr>
                </table>
            </form>
            <br>
        </div>
    </div>
</body>

</html>