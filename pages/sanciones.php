<?php
require('../layout/menu.php');
include('conex.php');
$link = Conectarse();
?>

<!doctype html>
<html lang="en">

<head>
  <title>INICIO</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

  <main>
    <div id="contenedor-users">
      <div class="btn-register">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registroModalsancion">
          Registrar Sancion
        </button>
      </div>
      <?php include("modalregistersancion.php");?>
      <div id="table-user">
        <div class="user-title">
          <p class="text">Lista de Sanciones</p>
        </div>

        <div class="search">
          <form class="d-flex" role="search">
            <img src="../img/iconos/search.png">
            <input class="form-control me-2 SearchInput" type="search" id="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" id="search" type="submit">Buscar</button>
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
                    <th scope="col">Id sancion</th>
                    <th scope="col">Vehiculo</th>
                    <th scope="col">Fecha_Inicio</th>
                    <th scope="col">Fecha_Fin</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Borrrar</th>
                  </tr>
                </thead>
                <tbody class="tbody" >
                  <?php
                  $sql3 = "SELECT
                  `sanciones`.`IdSancion`, `vehiculos`.`IdVehiculo`, `PlacaVehiculo`,
                  `vehiculos_marca`.`NombreMarcaVehiculo`, `sanciones`.`Fecha_Inicio_Sancion`,
                  `sanciones`.`Fecha_Fin_Sancion`, `sanciones`.`EstadoSancion`,
                  `sanciones`.`DescripcionSancion`
                FROM
                  `sanciones` INNER JOIN
                  `vehiculos` ON `vehiculos`.`IdVehiculo` = `sanciones`.`IdVehiculo` INNER JOIN
                  `vehiculos_marca` ON `vehiculos_marca`.`IdMarcaVehiculo` =
                    `vehiculos`.`IdMarcaVehiculo`;";

                      $consulta3 = mysqli_query($link, $sql3);
                      $a = 1;

                      while ($row3 = mysqli_fetch_array($consulta3)) {
                        echo '<tr>
                    <td>' . $row3['IdSancion'] . '</td>
                    <td>' . $row3['NombreMarcaVehiculo'] . ' '.$row3['PlacaVehiculo'].'</td>
                    <td>' . $row3['Fecha_Inicio_Sancion'] . '</td>
                    <td>' . $row3['Fecha_Fin_Sancion'] . '</td>
                    ';
                    if($row3['EstadoSancion'] == 1){
                      echo '<td>Activa</td>';
                    }  else{
                      echo '<td>Inactiva</td>';
                    }
                    echo '
                    <td>' . $row3['DescripcionSancion'] . '</td>
                    <td><a data-bs-toggle="modal" data-bs-target="#exampleModal' . $row3['IdSancion'] . '" href="#"><img src="../img/iconos/editar.png" width="20"></a> <?php include("exampleModal3") ?> </td>
                    <td><a href="borrarsancion.php?IdSancion=' . $row3['IdSancion'] . '"><img src="../img/iconos/borrar.png" width="20" ' . ' onclick="if(!confirm(' . "'Va a Eliminar la Sancion'" . '))return false"></a></td>
                  </tr>';
                        $a++;
                        include("modaleditsancion.php");
                      }
                  ?>
                </tbody>
              </table>
              <!-- fin tabla -->
            </div>
            <div class="col-2"></div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

<script src="js\main.js"></script>

</html>