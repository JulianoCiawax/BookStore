<?php
include("../config/config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM livros WHERE id=$id");
header("Location: livros.php");
?>

