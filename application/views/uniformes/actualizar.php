<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR UNIFORME</h3>
    <div class="text-center">
      <a href="<?php echo site_url('uniformes/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($uniformeEditar): ?>
        <form id="frm_actualizar_uniforme" class="" enctype="multipart/form-data" action="<?php echo site_url('uniformes/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="coduni_md" value="<?php echo $uniformeEditar->coduni_md; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">SHORT:</label>
              </div>
            <div class="col-md-7">
                <input type="file" id="short_md" name="short_md" value="<?php echo $uniformeEditar->short_md; ?>" accept="image/png, image/jpg">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">MEDIAS:</label>
              </div>
            <div class="col-md-7">
                <input type="file" id="medias_md" name="medias_md" value="<?php echo $uniformeEditar->medias_md; ?>" accept="image/png, image/jpg">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Actualizar</button>
                <a href="<?php echo site_url('uniformes/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
              </div>
            </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró la selección :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<script type="text/javascript">
$("#frm_actualizar_uniforme").validate({
  rules:{
    short_md:{
      required:true
    },
    medias_md:{
      required:true
    }
  },
  messages:{
    short_md:{
      required:"Por favor seleccione una imagen"
    },
    medias_md:{
      required:"Por favor seleccione una imagen"
      }
    }
});
</script>
