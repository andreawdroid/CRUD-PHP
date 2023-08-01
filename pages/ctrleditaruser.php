<?php
  include('conex.php');
  $IdUsuario = $_POST['IdUsuario'];
  $link1 = Conectarse();
  $NombresUsuario = $_POST['NombresUsuario'];
  $ApellidosUsuario= $_POST['ApellidosUsuario'];
  $IdTipoDocumento = $_POST['IdTipoDocumento'];
  $DocumentoUsuario = $_POST['DocumentoUsuario'];
  $TelefonoUsuario = $_POST['TelefonoUsuario'];
  $CorreoUsuario = $_POST['CorreoUsuario'];
  $IdCentro = $_POST['IdCentro'];
  $IdRol = $_POST['IdRol'];
  $IdFicha = $_POST['IdFicha'];
  $ImagenUsuario = $_POST['ImagenUsuario'];


$sql1 = "UPDATE usuarios SET 
IdUsuario = '$IdUsuario', 
NombresUsuario = '$NombresUsuario', 
ApellidosUsuario= '$ApellidosUsuario',
IdTipoDocumento = '$IdTipoDocumento', 
DocumentoUsuario = '$DocumentoUsuario',
TelefonoUsuario = '$TelefonoUsuario',
CorreoUsuario = '$CorreoUsuario', 
IdCentro = '$IdCentro', 
IdRol= '$IdRol',
IdFicha= '$IdFicha',
ImagenUsuario = '$ImagenUsuario' WHERE  usuarios.IdUsuario = '$IdUsuario'";
$consulta = mysqli_query($link1, $sql1);
header('Location:users.php?');

?>
