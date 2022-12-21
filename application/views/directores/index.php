<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i><b> Gestión de Directores</b>
  <hr>
  <center>
  <a href="<?php echo site_url('directores/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoDirectores): ?>
  <table id="tbl-directores" class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">APELLIDO</th>
        <th class="text-center">CÉDULA</th>
        <th class="text-center">FECHA INGRESO</th>
        <th class="text-center">FOTO</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoDirectores->result() as $directorTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $directorTemporal->id_dir_md; ?></td>
          <td class="text-center"><?php echo $directorTemporal->nombre_dir_md; ?></td>
          <td class="text-center"><?php echo $directorTemporal->apellido_dir_md; ?></td>
          <td class="text-center"><?php echo $directorTemporal->cedula_dir_md; ?></td>
          <td class="text-center"><?php echo $directorTemporal->fecha_ingreso_dir_md; ?></td>
          <td class="text-center"><?php if ($directorTemporal->foto_dir_md!=""): ?> <a href="<?php echo base_url('uploads/directores').'/'.$directorTemporal->foto_dir_md; ?> "target="_blank">
              <img src="<?php echo base_url('uploads/directores').'/'.$directorTemporal->foto_dir_md; ?> "width="50px" height="50px" alt=""></a>
                  <?php else: ?>
                    N/A
                  <?php endif; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('directores/actualizar'); ?>/<?php echo $directorTemporal->id_dir_md; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('directores/borrar'); ?>/<?php echo $directorTemporal->id_dir_md; ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar?');"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen directores</b></h3>
<?php endif; ?>
<script type="text/javascript"> $("#tbl-directores").DataTable(); </script>
