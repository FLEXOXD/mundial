<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR DIRECTOR</h3>
    <div class="text-center">
      <a href="<?php echo site_url('directores/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($directorEditar): ?>
        <form class="" action="<?php echo site_url('directores/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="id_dir_md" value="<?php echo $directorEditar->id_dir_md; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="nombre_dir_md" value="<?php echo $directorEditar->nombre_dir_md; ?>" class="form-control" placeholder="Ingrese los dos nombres" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">APELLIDO:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="apellido_dir_md" value="<?php echo $directorEditar->apellido_dir_md; ?>" class="form-control" placeholder="Ingrese los dos apellidos" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">CÉDULA:</label>
              </div>
            <div class="col-md-7">
                <input type="number" name="cedula_dir_md" value="<?php echo $directorEditar->cedula_dir_md; ?>" class="form-control" placeholder="Ingrese la cédula" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">FECHA INGRESO:</label>
              </div>
            <div class="col-md-7">
                <input type="date" name="fecha_ingreso_dir_md" value="<?php echo $directorEditar->fecha_ingreso_dir_md; ?>" class="form-control" placeholder="Ingrese la fecha de ingreso" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Actualizar</button>
                <a href="<?php echo site_url('directores/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
              </div>
            </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró al director :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
