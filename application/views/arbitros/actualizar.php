<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR ARBITRO</h3>
    <div class="text-center">
      <a href="<?php echo site_url('arbitros/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($arbitroEditar): ?>
        <form id="frm_actualizar_arbitro" class="" enctype="multipart/form-data" action="<?php echo site_url('arbitros/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="codarb_md" value="<?php echo $arbitroEditar->codarb_md; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
            <div class="col-md-7">
                <input type="text" id="nomarb_md" name="nomarb_md" value="<?php echo $arbitroEditar->nomarb_md; ?>" class="form-control" placeholder="Ingrese los dos nombres">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">FECHA INGRESO:</label>
              </div>
            <div class="col-md-7">
                <input type="date" id="fecing_md" name="fecing_md" value="<?php echo $arbitroEditar->fecing_md; ?>" class="form-control" placeholder="Ingrese la fecha de ingreso">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Actualizar</button>
                <a href="<?php echo site_url('arbitros/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
              </div>
            </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró al arbitro :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<script type="text/javascript">
$("#frm_actualizar_arbitro").validate({
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
