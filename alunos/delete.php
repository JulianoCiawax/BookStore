<?php
include("../config/config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM alunos WHERE id=$id");
header("Location: alunos.php");
?>

