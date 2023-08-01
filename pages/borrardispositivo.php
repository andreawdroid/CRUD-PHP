<?php
include('conex.php');
$IdDispositivo = $_GET['IdDispositivo']; 
$link=Conectarse();
$sql =  "DELETE FROM dispositivos WHERE dispositivos.IdDispositivo='$IdDispositivo'";

$consulta = mysqli_query($link, $sql);

header("location:dispositivos.php?")
?>