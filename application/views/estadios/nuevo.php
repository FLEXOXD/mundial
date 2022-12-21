<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO ESTADIO
</legend>
<form  id="frm_nuevo_estadio" class="" enctype="multipart/form-data" action="<?php echo site_url('estadios/guardarEstadio'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DESCRIPCIÓN:</label>
      </div>
    <div class="col-md-7">
        <input type="text" id="desest_md" name="desest_md" value="" class="form-control" placeholder="Ingrese la descripción">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">UBICACIÓN:</label>
      </div>
    <div class="col-md-7">
        <input type="text" id="ubiest_md" name="ubiest_md" value="" class="form-control" placeholder="Ingrese la ubicación">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">CAPACIDAD:</label>
      </div>
    <div class="col-md-7">
        <input type="number" id="capest_md" name="capest_md" value="" class="form-control" placeholder="Ingrese la capacidad">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('estadios/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
<script type="text/javascript">
$("#frm_nuevo_estadio").validate({
  rules:{
    desest_md:{
      required:true,
      minlength:3
    },
    ubiest_md:{
      required:true,
      minlength:3
    },
    capest_md	:{
      required:true,
    }
  },
  messages:{
    desest_md:{
      required:"Por favor complete la descripción",
      minlength:"Descripción incorrecta"
    },
    ubiest_md:{
      required:"Por favor complete la ubicación",
      minlength:"Ubicación incorrecta"
    },
    capest_md:{
      required:"Por favor complete la capacidad",
      }
    }
});
</script>
