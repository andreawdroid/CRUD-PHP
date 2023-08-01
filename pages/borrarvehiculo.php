<?php
include('conex.php');
$IdVehiculo = $_GET['IdVehiculo']; 
$link=Conectarse();
$sql =  "DELETE FROM vehiculos WHERE vehiculos.IdVehiculo='$IdVehiculo|'";

$consulta = mysqli_query($link, $sql);

header("location:vehicles.php?")
?>