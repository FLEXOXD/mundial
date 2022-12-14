<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i><b> Gestión de Paises</b>
  <hr>
  <center>
  <a href="<?php echo site_url('paises/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoPaises): ?>
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
      <?php foreach ($listadoPaises->result() as $paisTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $paisTemporal->id_pa_md; ?></td>
          <td class="text-center"><?php echo $paisTemporal->nombre_pa_md; ?></td>
          <td class="text-center"><?php echo $paisTemporal->descripcion_pa_md; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('paises/actualizar'); ?>/<?php echo $paisTemporal->id_pa_md; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('paises/borrar'); ?>/<?php echo $paisTemporal->id_pa_md; ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar?');"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen paises</b></h3>
<?php endif; ?>
