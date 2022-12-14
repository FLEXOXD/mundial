<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR SELECCIÓN</h3>
    <div class="text-center">
      <a href="<?php echo site_url('selecciones/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($seleccionEditar): ?>
        <form class="" action="<?php echo site_url('selecciones/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="id_selec_md" value="<?php echo $seleccionEditar->id_selec_md; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="nombre_selec_md" value="<?php echo $seleccionEditar->nombre_selec_md; ?>" class="form-control" placeholder="Ingrese el nombre" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DESCRIPCIÓN:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="descripcion_selec_md" value="<?php echo $seleccionEditar->descripcion_selec_md; ?>" class="form-control" placeholder="Ingrese la descripción" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Actualizar</button>
                <a href="<?php echo site_url('selecciones/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
              </div>
            </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró la selección :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
