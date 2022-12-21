<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO ARBITRO
</legend>
<form id="frm_nuevo_arbitro" class="" enctype="multipart/form-data" action="<?php echo site_url('arbitros/guardarArbitro'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
    <div class="col-md-7">
        <input type="text" id="nomarb_md" name="nomarb_md" value="" class="form-control" placeholder="Ingrese los dos nombres">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FECHA INGRESO:</label>
      </div>
    <div class="col-md-7">
        <input type="date" id="fecing_md" name="fecing_md" value="" class="form-control" placeholder="Ingrese la fecha de ingreso">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('arbitros/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
<script type="text/javascript">
$("#frm_nuevo_arbitro").validate({
  rules:{
    nomarb_md	:{
      required:true,
      minlength:3
    },
    fecing_md:{
      required:true
    }
  },
  messages:{
    nomarb_md	:{
      required:true,
      minlength:3
    },
    fecing_md:{
      required:true
    }
  }
});
</script>
