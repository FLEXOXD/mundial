<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i><b> Gestión de Estadios</b>
  <hr>
  <center>
  <a href="<?php echo site_url('estadios/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoEstadios): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">DESCRIPCIÓN</th>
        <th class="text-center">UBICACIÓN</th>
        <th class="text-center">CAPACIDAD</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoEstadios->result() as $estadioTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $estadioTemporal->codest_md; ?></td>
          <td class="text-center"><?php echo $estadioTemporal->desest_md; ?></td>
          <td class="text-center"><?php echo $estadioTemporal->ubiest_md; ?></td>
          <td class="text-center"><?php echo $estadioTemporal->capest_md; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('estadios/actualizar'); ?>/<?php echo $estadioTemporal->codest_md; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('estadios/borrar'); ?>/<?php echo $estadioTemporal->codest_md; ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar?');"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen estadios</b></h3>
<?php endif; ?>
