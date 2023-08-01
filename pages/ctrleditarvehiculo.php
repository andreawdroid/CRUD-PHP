<?php
  include('conex.php');
  $IdVehiculo = $_POST['IdVehiculo'];
  $link1 = Conectarse();
  $IdTipoVehiculo = $_POST['IdTipoVehiculo'];
  $PlacaVehiculo= $_POST['PlacaVehiculo'];
  $IdMarcaVehiculo = $_POST['IdMarcaVehiculo'];
  $ModeloVehiculo = $_POST['ModeloVehiculo'];
  $ImagenVehiculo = $_POST['ImagenVehiculo'];


$sql5 = "UPDATE vehiculos SET 
IdVehiculo= '$IdVehiculo', 
IdTipoVehiculo = '$IdTipoVehiculo', 
PlacaVehiculo= '$PlacaVehiculo',
IdMarcaVehiculo = '$IdMarcaVehiculo', 
ModeloVehiculo = '$ModeloVehiculo',
ImagenVehiculo = '$ImagenVehiculo' WHERE  vehiculos.IdVehiculo = '$IdVehiculo '";
$consulta = mysqli_query($link1, $sql5); 
header('Location:vehicles.php?');

?>
