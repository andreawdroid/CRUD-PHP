<?php
include('conex.php');
$IdSancion = $_GET['IdSancion']; 
$link=Conectarse();
$sql =  "DELETE FROM sanciones WHERE sanciones.IdSancion='$IdSancion'";

$consulta = mysqli_query($link, $sql);

header("location:sanciones.php?")
?>