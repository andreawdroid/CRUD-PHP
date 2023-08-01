<!-- Modal 2-->

<div class="modal fade" id="exampleModal<?php echo $row3['IdDispositivo']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Dispositivo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- inicio form -->
        <form action="ctrleditardispositivo.php" method="post" enctype="multipart/form-data">
          <div class="row mt-2">

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">IdDispositivo</label>
              <input type="text" class="form-control" placeholder="ID" name="IdDispositivo" value="<?php echo $row3['IdDispositivo']; ?>" readonly>
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nombre Usuario</label>
              <input type="text" class="form-control" placeholder="Nombre" name="NombresUsuario" value="<?php echo $row3['NombresUsuario']; ?>" readonly>
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Sn Dispositivo</label>
              <input type="text" class="form-control" placeholder="SN DISPOSITIVO" name="SnDispositivo" value="<?php echo $row3['SnDispositivo']; ?>" >
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Tipo Dispositivo</label>
              <input type="text" class="form-control" placeholder="TIPO DISPOSITIVO" name="NombreTipoDispositivo" value="<?php echo $row3['NombreTipoDispositivo']; ?>" readonly>
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">NombreMarcaDispositivo</label>
              <input type="text" class="form-control" placeholder="MARCA DISPOSITIVO" name="NombreMarcaDispositivo" value="<?php echo $row3['NombreMarcaDispositivo']; ?>" readonly>
            </div>

      
          <div class="row mt-2">
          <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Imagen</label>
              <input type="text" class="form-control" placeholder="IMAGEN" name="ImagenDispositivo" value="<?php echo $row3['ImagenDispositivo']; ?>">
            </div>


            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"> documento dispositivo</label>
              <input type="text" class="form-control" placeholder="documento" name="DocumentoDispositivo" value="<?php echo $row3['DocumentoDispositivo']; ?>">
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