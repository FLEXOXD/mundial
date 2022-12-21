<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO DIRECTOR
</legend>
<form id="frm_nuevo_director" class="" enctype="multipart/form-data" action="<?php echo site_url('directores/guardarDirector'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
    <div class="col-md-7">
        <input type="text" id="nombre_dir_md" name="nombre_dir_md" value="" class="form-control" placeholder="Ingrese los dos nombres">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">APELLIDO:</label>
      </div>
    <div class="col-md-7">
        <input type="text" id="apellido_dir_md" name="apellido_dir_md" value="" class="form-control" placeholder="Ingrese los dos apellidos">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">CÉDULA:</label>
      </div>
    <div class="col-md-7">
        <input type="number" id="cedula_dir_md" name="cedula_dir_md" value="" class="form-control" placeholder="Ingrese la cédula">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FECHA INGRESO:</label>
      </div>
    <div class="col-md-7">
        <input type="date" id="fecha_ingreso_dir_md" name="fecha_ingreso_dir_md" value="" class="form-control" placeholder="Ingrese la fecha de ingreso">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FOTOGRAFÍA:</label>
      </div>
    <div class="col-md-7">
        <input type="file" id="foto_dir_md" name="foto_dir_md" value="" required accept="image/png, image/jpg">
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
<script type="text/javascript">
$("#frm_nuevo_director").validate({
  rules:{
    nombre_dir_md:{
      required:true,
      minlength:3
    },
    apellido_dir_md:{
      required:true,
      minlength:3
    },
    cedula_dir_md:{
      required:true,
      minlength:10,
      maxlenght:10,
      digits:true
    },
    fecha_ingreso_dir_md:{
      required:true
    },
    foto_jug_md:{
      required:true
    }
  },
  messages:{
    nombre_dir_md:{
      required:"Por favor complete los nombres",
      minlength:"Nombre Incorrecto"
    },
    apellido_dir_md:{
      required:"Por favor complete los apellidos",
      minlength:"Apellido Incorrecto"
    },
    cedula_dir_md:{
      required:"Por favor ingrese la cédula",
      minlength:"Cédula Incorrecta",
      maxlength:"Cédula Incorrecta",
      digits:"Este campo solo acepta números"
    },
    fecha_ingreso_dir_md:{
      required:"Por favor ingrese la fecha de ingreso"
    },
    foto_dir_md:{
      required:"Por favor seleccione una imagen"
    }
  }
});
</script>
