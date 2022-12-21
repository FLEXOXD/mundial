<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i><b> Gestión de Jugadores</b>
  <hr>
  <center>
  <a href="<?php echo site_url('jugadores/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoJugadores): ?>
  <table id="tbl-jugadores" class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">APELLIDO</th>
        <th class="text-center">NACIONALIDAD</th>
        <th class="text-center">EDAD</th>
        <th class="text-center">FECHA NACIMIENTO</th>
        <th class="text-center">FOTO</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoJugadores->result() as $jugadorTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $jugadorTemporal->id_jug_md; ?></td>
          <td class="text-center"><?php echo $jugadorTemporal->nombre_jug_md; ?></td>
          <td class="text-center"><?php echo $jugadorTemporal->apellido_jug_md; ?></td>
          <td class="text-center"><?php echo $jugadorTemporal->nacionalidad_jug_md; ?></td>
          <td class="text-center"><?php echo $jugadorTemporal->edad_jug_md; ?></td>
          <td class="text-center"><?php echo $jugadorTemporal->fecha_nacimiento_jug_md; ?></td>
          <td class="text-center"><?php if ($jugadorTemporal->foto_jug_md!=""): ?> <a href="<?php echo base_url('uploads/jugadores').'/'.$jugadorTemporal->foto_jug_md; ?> "target="_blank">
              <img src="<?php echo base_url('uploads/jugadores').'/'.$jugadorTemporal->foto_jug_md; ?> "width="50px" height="50px" alt=""></a>
                  <?php else: ?>
                    N/A
                  <?php endif; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('jugadores/actualizar'); ?>/<?php echo $jugadorTemporal->id_jug_md; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('jugadores/borrar'); ?>/<?php echo $jugadorTemporal->id_jug_md; ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar?');"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen jugadores</b></h3>
<?php endif; ?>
<script type="text/javascript"> $("#tbl-jugadores").DataTable(); </script>
