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
        <form id="frm_actualizar_director" class="" enctype="multipart/form-data" action="<?php echo site_url('directores/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="id_dir_md" value="<?php echo $directorEditar->id_dir_md; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
            <div class="col-md-7">
                <input type="text" id="nombre_dir_md" name="nombre_dir_md" value="<?php echo $directorEditar->nombre_dir_md; ?>" class="form-control" placeholder="Ingrese los dos nombres">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">APELLIDO:</label>
              </div>
            <div class="col-md-7">
                <input type="text" id="apellido_dir_md" name="apellido_dir_md" value="<?php echo $directorEditar->apellido_dir_md; ?>" class="form-control" placeholder="Ingrese los dos apellidos">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">CÉDULA:</label>
              </div>
            <div class="col-md-7">
                <input type="number" id="cedula_dir_md" name="cedula_dir_md" value="<?php echo $directorEditar->cedula_dir_md; ?>" class="form-control" placeholder="Ingrese la cédula">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">FECHA INGRESO:</label>
              </div>
            <div class="col-md-7">
                <input type="date" id="fecha_ingreso_dir_md" name="fecha_ingreso_dir_md" value="<?php echo $directorEditar->fecha_ingreso_dir_md; ?>" class="form-control" placeholder="Ingrese la fecha de ingreso">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">FOTOGRAFÍA:</label>
              </div>
            <div class="col-md-7">
                <input type="file" id="foto_dir_md" name="foto_dir_md" value="<?php echo $directorEditar->foto_dir_md; ?>" accept="image/png, image/jpg">
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
<script type="text/javascript">
$("#frm_actualizar_director").validate({
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
    foto_dir_md:{
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
      required:"Por favor ingrese la foto"
    }
  }
});
</script>
