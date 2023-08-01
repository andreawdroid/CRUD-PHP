<?php
  include('conex.php');
  $link = Conectarse();
  $IdDispositivo = $_POST['IdDispositivo'];
  $IdUsuario = $_POST['IdUsuario'];
  $SnDispositivo = $_POST['SnDispositivo'];
  $IdTipoDispositivo = $_POST['IdTipoDispositivo'];
  $IdMarcaDispositivo= $_POST['IdMarcaDispositivo'];
  $ImagenDispositivo= $_POST['ImagenDispositivo'];
  $DocumentoDispositivo= $_POST['DocumentoDispositivo'];

 


$sql = "UPDATE dispositivos SET IdDispositivo = '$IdDispositivo', IdUsuario = '$IdUsuario', SnDispositivo = '$SnDispositivo', IdTipoDispositivo = '$IdTipoDispositivo',  IdMarcaDispositivo = '$IdMarcaDispositivo', ImagenDispositivo = '$ImagenDispositivo', DocumentoDispositivo = '$DocumentoDispositivo' WHERE  dispositivos.IdDispositivo = '$IdDispositivo'";
$consulta = mysqli_query($link, $sql);
header('Location:dispositivos.php?');

?>
