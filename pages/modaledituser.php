<!-- Modal 2-->

<div class="modal fade" id="exampleModal<?php echo $row3['IdUsuario']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrarse</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- inicio form -->
        <form action="ctrleditaruser.php" method="post" enctype="multipart/form-data">
          <div class="row mt-2">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Id Usuario</label>
              <input type="text" class="form-control" placeholder="Nombres" name="IdUsuario" value="<?php echo $row3['IdUsuario']; ?>" readonly>
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nombres</label>
              <input type="text" class="form-control" placeholder="Nombres" name="NombresUsuario" value="<?php echo $row3['NombresUsuario']; ?>">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Apellidos</label>
              <input type="text" class="form-control" placeholder="Nombres" name="ApellidosUsuario" value="<?php echo $row3['ApellidosUsuario']; ?>">
            </div>


            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Id TipoDocumento</label>
              <input type="text" class="form-control" placeholder="Nombres" name="IdTipoDocumento" value="<?php echo $row3['IdTipoDocumento']; ?>" >
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Documento</label>
              <input type="text" class="form-control" placeholder="Nombres" name="DocumentoUsuario" value="<?php echo $row3['DocumentoUsuario']; ?>">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Telefono</label>
              <input type="text" class="form-control" placeholder="Nombres" name="TelefonoUsuario" value="<?php echo $row3['TelefonoUsuario']; ?>">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Correo</label>
              <input type="text" class="form-control" placeholder="Nombres" name="CorreoUsuario" value="<?php echo $row3['CorreoUsuario']; ?>">
            </div>


            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Id Centro</label>
              <input type="text" class="form-control" placeholder="Nombres" name="IdCentro" value="<?php echo $row3['IdCentro']; ?>" readonly>
            </div>


            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Id Rol</label>
              <input type="text" class="form-control" placeholder="rol" name="IdRol" value="<?php echo $row3['IdRol']; ?>" readonly>
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Id Ficha</label>
              <input type="text" class="form-control" placeholder="ficha" name="IdFicha" value="<?php echo $row3['IdFicha']; ?>" readonly>
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