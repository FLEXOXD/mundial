<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO DIRECTOR
</legend>
<form class="" action="<?php echo site_url('directores/guardarDirector'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="nombre_dir_md" value="" class="form-control" placeholder="Ingrese los dos nombres" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">APELLIDO:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="apellido_dir_md" value="" class="form-control" placeholder="Ingrese los dos apellidos" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">CÉDULA:</label>
      </div>
    <div class="col-md-7">
        <input type="number" name="cedula_dir_md" value="" class="form-control" placeholder="Ingrese la cédula" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FECHA INGRESO:</label>
      </div>
    <div class="col-md-7">
        <input type="date" name="fecha_ingreso_dir_md" value="" class="form-control" placeholder="Ingrese la fecha de ingreso" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('directores/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
