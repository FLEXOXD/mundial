<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i><b> Gestión de Arbitros</b>
  <hr>
  <center>
  <a href="<?php echo site_url('arbitros/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoArbitros): ?>
  <table id="tbl-arbitros" class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">FECHA INGRESO</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoArbitros->result() as $arbitroTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $arbitroTemporal->codarb_md; ?></td>
          <td class="text-center"><?php echo $arbitroTemporal->nomarb_md; ?></td>
          <td class="text-center"><?php echo $arbitroTemporal->fecing_md; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('arbitros/actualizar'); ?>/<?php echo $arbitroTemporal->codarb_md; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('arbitros/borrar'); ?>/<?php echo $arbitroTemporal->codarb_md; ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar?');"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen arbitros</b></h3>
<?php endif; ?>
<script type="text/javascript"> $("#tbl-arbitros").DataTable(); </script>
