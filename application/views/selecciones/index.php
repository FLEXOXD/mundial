<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i><b> Gestión de Selecciones</b>
  <hr>
  <center>
  <a href="<?php echo site_url('selecciones/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoSelecciones): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">DESCRIPCIÓN</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoSelecciones->result() as $seleccionTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $seleccionTemporal->id_selec_md; ?></td>
          <td class="text-center"><?php echo $seleccionTemporal->nombre_selec_md; ?></td>
          <td class="text-center"><?php echo $seleccionTemporal->descripcion_selec_md; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('selecciones/actualizar'); ?>/<?php echo $seleccionTemporal->id_selec_md; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('selecciones/borrar'); ?>/<?php echo $seleccionTemporal->id_selec_md; ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar?');"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen selecciones</b></h3>
<?php endif; ?>
