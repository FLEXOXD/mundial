<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO JUGADOR
</legend>
<form class="" action="<?php echo site_url('jugadores/guardarJugador'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="nombre_jug_md" value="" class="form-control" placeholder="Ingrese los dos nombres" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">APELLIDO:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="apellido_jug_md" value="" class="form-control" placeholder="Ingrese los dos apellidos" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NACIONALIDAD:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="nacionalidad_jug_md" value="" class="form-control" placeholder="Ingrese la nacionalidad" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">EDAD:</label>
      </div>
    <div class="col-md-7">
        <input type="number" name="edad_jug_md" value="" class="form-control" placeholder="Ingrese la edad" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FECHA DE NACIMIENTO:</label>
      </div>
    <div class="col-md-7">
        <input type="date" name="fecha_nacimiento_jug_md" value="" class="form-control" placeholder="Seleccione la fecha de nacimiento" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('jugadores/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
