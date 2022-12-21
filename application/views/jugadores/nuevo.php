<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO JUGADOR
</legend>
<form id="frm_nuevo_jugador" class="" enctype="multipart/form-data" action="<?php echo site_url('jugadores/guardarJugador'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
    <div class="col-md-7">
        <input type="text" id="nombre_jug_md" name="nombre_jug_md" value="" class="form-control" placeholder="Ingrese los dos nombres">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">APELLIDO:</label>
      </div>
    <div class="col-md-7">
        <input type="text" id="apellido_jug_md" name="apellido_jug_md" value="" class="form-control" placeholder="Ingrese los dos apellidos">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NACIONALIDAD:</label>
      </div>
    <div class="col-md-7">
        <input type="text" id="nacionalidad_jug_md" name="nacionalidad_jug_md" value="" class="form-control" placeholder="Ingrese la nacionalidad">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">EDAD:</label>
      </div>
    <div class="col-md-7">
        <input type="number" id="edad_jug_md" name="edad_jug_md" value="" class="form-control" placeholder="Ingrese la edad">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FECHA DE NACIMIENTO:</label>
      </div>
    <div class="col-md-7">
        <input type="date" id="fecha_nacimiento_jug_md" name="fecha_nacimiento_jug_md" value="" class="form-control" placeholder="Seleccione la fecha de nacimiento">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FOTOGRAFÍA:</label>
      </div>
    <div class="col-md-7">
        <input type="file" id="foto_jug_md" name="foto_jug_md" value="" required accept="image/png, image/jpg">
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
<script type="text/javascript">
$("#frm_nuevo_jugador").validate({
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
