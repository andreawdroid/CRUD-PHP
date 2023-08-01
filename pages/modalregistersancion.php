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
<div class="modal fade" id="registroModalsancion" tabindex="-1" aria-labelledby="registroModalsancion"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registroModalsanciona">Registrar sancion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- inicio form -->
        <form action="ctrlregistersancion.php" method="post" enctype="multipart/form-data">
          <div class="row mt-2">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Vehiculo</label>
              <select class="form-select" aria-label="Default select example" name="SancionVehiculo">
                <option selected>Seleccionar vehiculo</option>
                <?php 
                while($row=mysqli_fetch_assoc($resultado)){
                  echo '<option value="'.$row['IdVehiculo'].'">'.$row['NombreMarcaVehiculo'].' '.$row['PlacaVehiculo'].'</option>';
                }
                ?>
              </select>
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Inicio de Sancion</label>
              <input type="date" class="form-control" placeholder="Inicio Sancion" name="InicioSancion" value="">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Final de Sancion</label>
              <input type="date" class="form-control" placeholder="Final Sancion" name="FinSancion" value="">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Estado</label>
              <select class="form-select" aria-label="Default select example" name="EstadoSancion">
                <option selected>Seleccionar estado</option>
                <option value="1">Activa</option>
                <option value="0">Inactiva</option>
              </select>
            </div>
          </div>

          <div class="col-md-12 mt-3">
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="DescripcionSancion"></textarea>
              <label for="floatingTextarea2">Descripcion</label>
            </div>
            <button type="submit" class="btn btn-light btn-form mt-3" style="background-color: #fbcdc4">Enviar</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>