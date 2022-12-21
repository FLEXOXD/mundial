<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVA SELECCIÓN
</legend>
<form  id="frm_nuevo_seleccion" class="" enctype="multipart/form-data" action="<?php echo site_url('selecciones/guardarSeleccion'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
    <div class="col-md-7">
        <input type="text" id="nombre_selec_md" name="nombre_selec_md" value="" class="form-control" placeholder="Ingrese el nombre">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DESCRIPCIÓN:</label>
      </div>
    <div class="col-md-7">
        <input type="text" id="descripcion_selec_md" name="descripcion_selec_md" value="" class="form-control" placeholder="Ingrese la descripción">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('selecciones/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
<script type="text/javascript">
$("#frm_nuevo_seleccion").validate({
  rules:{
    nombre_selec_md:{
      required:true,
      minlength:3
    },
    descripcion_selec_md:{
      required:true,
      minlength:3
    }
  },
  messages:{
    nombre_selec_md:{
      required:"Por favor complete el nombre ",
      minlength:"Nombre incorrecto"
    },
    descripcion_selec_md:{
      required:"Por favor complete la descripcion",
      minlength:"Descripcion incorrecta"
      }
    }
});
</script>
