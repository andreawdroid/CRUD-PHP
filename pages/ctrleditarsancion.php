<?php
  include('conex.php');
  $link = Conectarse();
  $IdSancion = $_POST['IdSancion'];
  $IdVehiculo = $_POST['EditarVehiculoSancion'];
  $Fecha_Inicio_Sancion = $_POST['EditarInicioSancion'];
  $Fecha_Fin_Sancion = $_POST['EditarFinSancion'];
  $EstadoSancion = $_POST['EditarEstadoSancion'];
  $DescripcionSancion = $_POST['EditarDescripcionSancion'];

$sql = "UPDATE sanciones SET 
IdSancion = '$IdSancion',
 IdVehiculo = '$IdVehiculo', 
 Fecha_Inicio_Sancion = '$Fecha_Inicio_Sancion', 
 Fecha_Fin_Sancion = '$Fecha_Fin_Sancion', 
  EstadoSancion = '$EstadoSancion', 
  DescripcionSancion = '$DescripcionSancion' WHERE  sanciones.IdSancion = '$IdSancion'";
$consulta = mysqli_query($link, $sql);
header('Location:sanciones.php?');

?>
