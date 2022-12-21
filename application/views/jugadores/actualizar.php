<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR JUGADOR</h3>
    <div class="text-center">
      <a href="<?php echo site_url('jugadores/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($jugadorEditar): ?>
          <form id="frm_actualizar_jugador" class="" enctype="multipart/form-data" action="<?php echo site_url('jugadores/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="id_jug_md" value="<?php echo $jugadorEditar->id_jug_md; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
            <div class="col-md-7">
                <input type="text" id="nombre_jug_md" name="nombre_jug_md" value="<?php echo $jugadorEditar->nombre_jug_md; ?>" class="form-control" placeholder="Ingrese los dos nombres">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">APELLIDO:</label>
              </div>
            <div class="col-md-7">
                <input type="text" id="apellido_jug_md"  name="apellido_jug_md" value="<?php echo $jugadorEditar->apellido_jug_md; ?>" class="form-control" placeholder="Ingrese los dos apellidos">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NACIONALIDAD:</label>
              </div>
            <div class="col-md-7">
                <input type="text" id="nacionalidad_jug_md" name="nacionalidad_jug_md" value="<?php echo $jugadorEditar->nacionalidad_jug_md; ?>" class="form-control" placeholder="Ingrese la nacionalidad">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">EDAD:</label>
              </div>
            <div class="col-md-7">
                <input type="number" id="edad_jug_md" name="edad_jug_md" value="<?php echo $jugadorEditar->edad_jug_md; ?>" class="form-control" placeholder="Ingrese la edad">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">FECHA DE NACIMIENTO:</label>
              </div>
            <div class="col-md-7">
                <input type="date" id="fecha_nacimiento_jug_md" name="fecha_nacimiento_jug_md" value="<?php echo $jugadorEditar->fecha_nacimiento_jug_md; ?>" class="form-control" placeholder="Seleccione la fecha de nacimiento">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">FOTOGRAFÍA:</label>
              </div>
            <div class="col-md-7">
                <input type="file" id="foto_jug_md" name="foto_jug_md" value="<?php echo $jugadorEditar->foto_jug_md; ?>" accept="image/png, image/jpg">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Actualizar</button>
                <a href="<?php echo site_url('jugadores/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
              </div>
            </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró al jugador :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#frm_actualizar_jugador").validate({
  rules:{
    nombre_jug_md:{
      required:true,
      minlength:3
    },
    apellido_jug_md:{
      required:true,
      minlength:3
    },
    nacionalidad_jug_md:{
      required:true,
      minlength:3
    },
    edad_jug_md:{
      required:true,
      minlength:1,
      maxlenght:2,
      digits:true
    },
    fecha_nacimiento_jug_md:{
      required:true
    },
    foto_jug_md:{
      required:true
    }
  },
  messages:{
    nombre_jug_md:{
      required:"Por favor complete los nombres ",
      minlength:"Nombre incorrecto"
    },
    apellido_jug_md:{
      required:"Por favor complete los apellidos",
      minlength:"Apellido incorrecto"
    },
    nacionalidad_jug_md:{
      required:"Por favor complete la nacionalidad",
      minlength:"Nacionalidad incorrecta"
    },
    edad_jug_md:{
      required:"Por favor complete la edad",
      minlength:"Edad Incorrecta",
      maxlenght:"Edad Incorrecta",
      digits:"Edad incorrecta"
    },
    fecha_nacimiento_jug_md:{
      required:"Por favor ingrese la fecha de nacimiento"
    },
    foto_jug_md:{
      required:"Por favor seleccione una imagen"
    }
  }
});
</script>
