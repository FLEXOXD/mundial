<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i><b> Gestión de Uniformes</b>
  <hr>
  <center>
  <a href="<?php echo site_url('uniformes/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoUniformes): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">SHORT</th>
        <th class="text-center">MEDIAS</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoUniformes->result() as $uniformeTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $uniformeTemporal->coduni_md; ?></td>
          <td class="text-center"><?php echo $uniformeTemporal->short_md; ?></td>
          <td class="text-center"><?php echo $uniformeTemporal->medias_md; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('uniformes/actualizar'); ?>/<?php echo $uniformeTemporal->coduni_md; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('uniformes/borrar'); ?>/<?php echo $uniformeTemporal->coduni_md; ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar?');"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen selecciones</b></h3>
<?php endif; ?>
