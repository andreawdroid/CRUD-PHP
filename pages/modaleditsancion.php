<?php
$sql = "SELECT
`vehiculos`.`IdVehiculo`, `vehiculos_marca`.`NombreMarcaVehiculo`,
`vehiculos`.`PlacaVehiculo`
FROM
`vehiculos` INNER JOIN
`vehiculos_marca` ON `vehiculos_marca`.`IdMarcaVehiculo` =
  `vehiculos`.`IdMarcaVehiculo`; ";

$resultado = mysqli_query($link, $sql);
?>
<!-- Modal 2-->

<div class="modal fade" id="exampleModal<?php echo $row3['IdSancion']; ?>" tabindex="-1"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar sancion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- inicio form -->
        <form action="ctrleditarsancion.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="IdSancion" value="<?php echo $row3['IdSancion']; ?>">
          <div class="row mt-2">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Vehiculo</label>
              <select class="form-select" aria-label="Default select example" name="EditarVehiculoSancion">
                <option selected>Seleccionar vehiculo</option>
                <?php
                echo '<option value="' . $row3['IdVehiculo'] . '" selected>' . $row3['NombreMarcaVehiculo'] . ' ' . $row3['PlacaVehiculo'] . '</option>';
                while ($row = mysqli_fetch_assoc($resultado)) {
                  if ($row['PlacaVehiculo'] != $row3['PlacaVehiculo']){
                  echo '<option value="' . $row['IdVehiculo'] . '">' . $row['NombreMarcaVehiculo'] . ' ' . $row['PlacaVehiculo'] . '</option>';
                  }
                }
                ?>
              </select>
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Estado</label>
              <select class="form-select" aria-label="Default select example" name="EditarEstadoSancion">
                <?php
                if ($row3['EstadoSancion'] == 1) {
                echo '<option value="1" selected>Activa</option>';
                echo '<option value="0">Inactiva</option>';
                }else{
                echo '<option value="0" selected>Inactiva</option>';
                echo '<option value="1">Activa</option>';
                }
                ?>
              </select>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Inicio Sancion</label>
              <input type="date" class="form-control" placeholder="Nombres" name="EditarInicioSancion"
                value="<?php echo $row3['Fecha_Inicio_Sancion']; ?>" >
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Fin Sancion</label>
              <input type="date" class="form-control" placeholder="Nombres" name="EditarFinSancion"
                value="<?php echo $row3['Fecha_Fin_Sancion']; ?>" >
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-md-12 mt-3">
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                  style="height: 100px" name="EditarDescripcionSancion"> <?php echo $row3['DescripcionSancion'] ?> </textarea>
                <label for="floatingTextarea2">Descripcion</label>
              </div>
              <button type="submit" class="btn btn-light btn-form mt-3"
                style="background-color: #fbcdc4">Enviar</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>