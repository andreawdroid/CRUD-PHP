<!-- Modal 2-->

<div class="modal fade" id="exampleModal<?php echo $row3['IdVehiculo']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrarse</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- inicio form -->
        <form action="ctrleditarvehiculo.php" method="post" enctype="multipart/form-data">
          <div class="row mt-2">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">IdVehiculo</label>
              <input type="text" class="form-control" placeholder="Nombres" name="IdVehiculo" value="<?php echo $row3['IdVehiculo']; ?>" readonly>
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">NombresUsuario</label>
              <input type="text" class="form-control" placeholder="Nombres" name="NombresUsuario" value="<?php echo $row3['NombresUsuario']; ?>" readonly>
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">NombreTipoVehiculo</label>
              <input type="text" class="form-control" placeholder="Nombres" name="NombreTipoVehiculo" value="<?php echo $row3['NombreTipoVehiculo']; ?>" readonly>
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">PlacaVehiculo</label>
              <input type="text" class="form-control" placeholder="Nombres" name="PlacaVehiculo" value="<?php echo $row3['PlacaVehiculo']; ?>" readonly>
            </div>


          <div class="col-md-6">
              <label for="inputEmail4" class="form-label">NombreMarcaVehiculo</label>
              <input type="text" class="form-control" placeholder="Nombres" name="NombreMarcaVehiculo" value="<?php echo $row3['NombreMarcaVehiculo']; ?>">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">ModeloVehiculo</label>
              <input type="text" class="form-control" placeholder="Nombres" name="ModeloVehiculo" value="<?php echo $row3['ModeloVehiculo']; ?>">
            </div>


            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Imagen</label>
              <input type="text" class="form-control" placeholder="Nombres" name="ImagenVehiculo" value="<?php echo $row3['ImagenVehiculo']; ?>">
            </div>
        
            <button type="submit" class="btn btn-light" style="background-color: #fbcdc4">Enviar</button>
          </div>

      </div>
    </div>



      <!-- fin form -->
      <!-- </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>  -->
      <!-- Fin Modal 2 -->