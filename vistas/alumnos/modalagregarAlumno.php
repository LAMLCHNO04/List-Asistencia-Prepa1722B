<form action="" method="POST" id="frmAgregarAlumno" onsubmit="return agregarAlumno()">
<!-- The Modal -->
<div class="modal" id="modalAgregarAlumno">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Agregar Alumno</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <div class="row">
         <div class="col-4 mb-3 mt-3">
                <label for="id" class="form-label">ID:</label>
                <input type="text" class="form-control" id="id" placeholder="ID Alumno" name="id">
            </div>
            <div class="col-4 mb-3 mt-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre Alumno" name="nombre">
            </div>
            <div class="col-4 mb-3 mt-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" class="form-control" id="apellido" placeholder="Apellido Alumno" name="apellido">
            </div>
         </div>
         <div class="row">
            <div class="col-4 mb-3 mt-3">
                <label for="correo" class="form-label">Correo:</label>
                <input type="text" class="form-control" id="correo" placeholder="Correo" name="correo">
            </div>
            <div class="col-sm-4 mb-3 mt-3">
                        <label style="margin: 10px 0px 0px 0px">Grupo</label>
                        <?php
                             $sql = "SELECT id_grupo, CONCAT(grupo,' ',turno) AS grupo FROM grupo ORDER BY grupo";
                             $respuesta = mysqli_query($conexion, $sql);
                        ?>
                        <select name="idGrupo" id="idGrupo" class="form-select" style="width: 100%;" required>
                            <option value="0">Seleciona grupo</option>
                            <?php while($mostra = mysqli_fetch_array($respuesta)){ ?>
                            <option value="<?php echo $mostra['id_grupo']?>"><?php echo $mostra['grupo']?></option>
                            <?php } ?>
                        </select>
         </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btnCerrarAgregar">Close</button>
        <input type="submit" class="btn btn-primary" value="Asignar">
      </div>

    </div>
  </div>
</div>
</form>