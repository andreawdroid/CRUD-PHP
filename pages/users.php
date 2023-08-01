<?php 
require('../layout/menu.php');
include('conex.php');
$link1=Conectarse();
?>
<!doctype html>
<html lang="en">

<head>
  <title>INICIO</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
 
  <main>
  <div id="contenedor-users">

<div class="btn-register">
    <button type="button" class="btn btn-primary" onclick="">Registrar Usuario</button>
</div>

<div id="table-user">

    <div class="user-title">
        <p class="text">Lista de Usuarios</p>
    </div>

    <div class="search">
        <form class="d-flex" role="search">
            <img src="../img/iconos/search.png">
            <input class="form-control me-2 SearchInput" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div>

    <div class="line"></div>


    
    <div class="container mt-3">
      <div class="row justify-content-center align-items-center g-2">
        <div class="col-2"></div>
        <div class="col-8">
          <!-- inicio tabla -->
          <table class="table table-striped table-bordered ">
            <thead>
              <tr>
                
                <th scope="col">Usuario</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Tipo Documento</th>
                <th scope="col">Numero Documento</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Id Centro</th>
                <th scope="col">Id Rol</th>
                <th scope="col">Id Ficha</th>
                <th scope="col">Foto</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrrar</th>
                  

              </tr>
            </thead>
            <tbody>
              <?php

              $sql1 = "SELECT * FROM usuarios WHERE 1";
              
              $consulta1 = mysqli_query($link1,$sql1);
              $a = 1;

              while($row3=mysqli_fetch_array($consulta1))
              {
                echo '<tr>
                
                
                <td>'.$row3['IdUsuario'].'</td>
                <td>'.$row3['NombresUsuario'].'</td>
                <td>'.$row3['ApellidosUsuario'].'</td>
                <td>'.$row3['IdTipoDocumento'].'</td>
                <td>'.$row3['DocumentoUsuario'].'</td>
                <td>'.$row3['TelefonoUsuario'].'</td>
                <td>'.$row3['CorreoUsuario'].'</td>
                <td>'.$row3['IdCentro'].'</td>
                <td>'.$row3['IdRol'].'</td>
                <td>'.$row3['IdFicha'].'</td>
                <td>'.$row3['ImagenUsuario'].'</td>
                <td><a data-bs-toggle="modal" data-bs-target="#exampleModal'.$row3['IdUsuario'].'" href="#"><img src="../img/iconos/editar.png" width="20"></a> <?php include("exampleModal3") ?> </td>
                <td><a href="borraruser.php?IdUsuario='.$row3['IdUsuario'].'"><img src="../img/iconos/borrar.png" width="20" '.' onclick="if(!confirm('."'Va a Eliminar la Persona'".'))return false"></a></td>
              </tr>';
              $a++;
              include("modaledituser.php");
              }
              ?>
            </tbody>
          </table>
          <!-- fin tabla -->
       
        </div>
        <div class="col-2"></div>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

<script src="js\main.js"></script>
</body>

</html>


                       