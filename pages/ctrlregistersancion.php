<?php
include('conex.php');
$link = Conectarse();
$IdVehiculo = $_POST['SancionVehiculo'];
$InicioSancion = $_POST['InicioSancion'];
$FinSancion = $_POST['FinSancion'];
$EstadoSancion = $_POST['EstadoSancion'];
$DescripcionSancion = $_POST['DescripcionSancion'];

$sql = "INSERT INTO sanciones (IdSancion, IdVehiculo, Fecha_Inicio_Sancion, Fecha_Fin_Sancion, EstadoSancion, DescripcionSancion) 
VALUES (NULL,'$IdVehiculo', '$InicioSancion', '$FinSancion', '$EstadoSancion', '$DescripcionSancion')";

$consulta = mysqli_query($link, $sql);
header('Location:sanciones.php?');
?>