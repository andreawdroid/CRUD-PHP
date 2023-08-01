<?php
include('conex.php');
$IdUsuario = $_GET['IdUsuario']; 
$link=Conectarse();
$sql =  "DELETE FROM usuarios WHERE usuarios.IdUsuario='$IdUsuario'";

$consulta = mysqli_query($link, $sql);

header("location:users.php?")
?>