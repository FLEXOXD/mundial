<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR ESTADIO</h3>
    <div class="text-center">
      <a href="<?php echo site_url('estadios/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($estadioEditar): ?>
        <form id="frm_actualizar_estadio" class="" enctype="multipart/form-data" action="<?php echo site_url('estadios/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="codest_md" value="<?php echo $estadioEditar->codest_md; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DESCRIPCIÓN:</label>
              </div>
            <div class="col-md-7">
                <input type="text" id="desest_md" name="desest_md" value="<?php echo $estadioEditar->desest_md; ?>" class="form-control" placeholder="Ingrese la descripción">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">UBICACIÓN:</label>
              </div>
            <div class="col-md-7">
                <input type="text" id="ubiest_md" name="ubiest_md" value="<?php echo $estadioEditar->ubiest_md; ?>" class="form-control" placeholder="Ingrese la ubicación">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">CAPACIDAD:</label>
              </div>
            <div class="col-md-7">
                <input type="number" id="capest_md" name="capest_md" value="<?php echo $estadioEditar->capest_md; ?>" class="form-control" placeholder="Ingrese la capacidad">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Actualizar</button>
                <a href="<?php echo site_url('estadios/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
              </div>
            </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró el estadio :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<script type="text/javascript">
$("#frm_actualizar_estadio").validate({
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
