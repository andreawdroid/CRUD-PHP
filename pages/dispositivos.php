<?php 
require('../layout/menu.php');
include('conex.php');
$link=Conectarse();
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
<!-- place navbar here -->

</head>

<body>
 
  <main>
  <div id="contenedor-users">

<div class="btn-register">
    <button type="button" class="btn btn-primary" onclick="">Registrar Dispositivo</button>
</div>

<div id="table-user">

    <div class="user-title">
        <p class="text">Lista de Dispositivo</p>
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
                <th scope="col">idDispositivo</th>
                <th scope="col">idUsuario</th>
                <th scope="col">SnDisposotivo</th>
                <th scope="col">IdTipoDispositivo</th>
                <th scope="col">IdMarcaDispositivo</th>
                <th scope="col">Imagen Dispositivo</th>
                <th scope="col">DocumentoDispositivo</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrrar</th>

              </tr>
            </thead>
            <tbody>
              <?php

              $sql3 = "SELECT
              `dispositivos`.`IdDispositivo`, `usuarios`.`NombresUsuario`,
              `dispositivos`.`SnDispositivo`, `dispositivos_tipo`.`NombreTipoDispositivo`,
              `dispositivos`.`ImagenDispositivo`, `dispositivos`.`DocumentoDispositivo`,
              `dispositivos_marca`.`NombreMarcaDispositivo`
            FROM
              `dispositivos` INNER JOIN
              `usuarios` ON `usuarios`.`IdUsuario` = `dispositivos`.`IdUsuario` INNER JOIN
              `dispositivos_tipo` ON `dispositivos_tipo`.`IdTipoDispositivo` =
                `dispositivos`.`IdTipoDispositivo` INNER JOIN
              `dispositivos_marca` ON `dispositivos_marca`.`IdMarcaDispositivo` =
                `dispositivos`.`IdMarcaDispositivo`;";
              
              $consulta3 = mysqli_query($link,$sql3);
              $a = 1;

              while($row3=mysqli_fetch_array($consulta3))
              {
                echo '<tr>
                <td>'.$row3['IdDispositivo'].'</td>
                <td>'.$row3['NombresUsuario'].'</td>
                <td>'.$row3['SnDispositivo'].'</td>
                <td>'.$row3['NombreTipoDispositivo'].'</td>
                <td>'.$row3['NombreMarcaDispositivo'].'</td>
                <td>'.$row3['ImagenDispositivo'].'</td>
                <td>'.$row3['DocumentoDispositivo'].'</td>
                <td><a data-bs-toggle="modal" data-bs-target="#exampleModal'.$row3['IdDispositivo'].'" href="#"><img src="../img/iconos/editar.png" width="20"></a> <?php include("exampleModal3") ?> </td>
                <td><a href="borrardispositivo.php?IdDispositivo='.$row3['IdDispositivo'].'"><img src="../img/iconos/borrar.png" width="20" '.' onclick="if(!confirm('."'Va a Eliminar este Dispositivo'".'))return false"></a></td>
              </tr>';
              $a++;
              include("modaleditdispositivo.php");
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
</body>
<script src="js\main.js"></script>
</html>