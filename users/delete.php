<?php
include("../config/config.php");

$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM admin WHERE id=$id");

header("Location: usuarios.php");
?>