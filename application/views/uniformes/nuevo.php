<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO UNIFORME
</legend>
<form  id="frm_nuevo_uniforme" class="" enctype="multipart/form-data" action="<?php echo site_url('uniformes/guardarUniforme'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">SHORT:</label>
      </div>
    <div class="col-md-7">
        <input type="file" id="short_md" name="short_md" value="" required accept="image/png, image/jpg">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">MEDIAS:</label>
      </div>
    <div class="col-md-7">
        <input type="file" id="medias_md" name="medias_md" value="" required accept="image/png, image/jpg">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('uniformes/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
<script type="text/javascript">
$("#frm_nuevo_uniforme").validate({
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
