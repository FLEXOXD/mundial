<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR PAIS</h3>
    <div class="text-center">
      <a href="<?php echo site_url('paises/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($paisEditar): ?>
        <form id="frm_actualizar_pais" class="" enctype="multipart/form-data" action="<?php echo site_url('paises/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="id_pa_md" value="<?php echo $paisEditar->id_pa_md; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
            <div class="col-md-7">
                <input type="text" id="nombre_pa_md" name="nombre_pa_md" value="<?php echo $paisEditar->nombre_pa_md; ?>" class="form-control" placeholder="Ingrese el nombre">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DESCRIPCIÓN:</label>
              </div>
            <div class="col-md-7">
                <input type="text" id="descripcion_pa_md" name="descripcion_pa_md" value="<?php echo $paisEditar->descripcion_pa_md; ?>" class="form-control" placeholder="Ingrese la descripción">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Actualizar</button>
                <a href="<?php echo site_url('paises/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
              </div>
            </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró el pais :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<script type="text/javascript">
$("#frm_actualizar_pais").validate({
  rules:{
    nombre_pa_md:{
      required:true,
      minlength:3
    },
    descripcion_pa_md:{
      required:true,
      minlength:3
    }
  },
  messages:{
    nombre_pa_md:{
      required:"Por favor complete el nombre ",
      minlength:"Nombre incorrecto"
    },
    descripcion_pa_md:{
      required:"Por favor complete la descripcion",
      minlength:"Descripcion incorrecta"
      }
    }
});
</script>
