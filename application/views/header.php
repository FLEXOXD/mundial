<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MUNDIAL</title>
    <!-- importación Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Importación de Jquery Validate -->
    <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/jquery.validate.min.js'); ?>"></script>
    <!-- Importación de Jquery additional methods -->
    <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/additional-methods.min.js'); ?>"></script>
    <!-- Importación de Jquery messages_es -->
    <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/messages_es_AR.min.js'); ?>"></script>
    <!-- Importación de dataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <!-- Importación SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.css" integrity="sha512-JzSVRb7c802/njMbV97pjo1wuJAE/6v9CvthGTDxiaZij/TFpPQmQPTcdXyUVucsvLtJBT6YwRb5LhVxX3pQHQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.js" integrity="sha512-9V+5wAdU/RmYn1TP+MbEp5Qy9sCDYmvD2/Ub8sZAoWE2o6QTLsKx/gigfub/DlOKAByfhfxG5VKSXtDlWTcBWQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- En caso de no funcionar debajo de la importación, colocar antes del </body> en footer -->
    <!-- CONFIRMACIÓN -->
    <?php if ($this->session->flashdata('confirmacion')): ?>
      <script type="text/javascript">
        $(document).ready(function(){
          Swal.fire(
            'CONFORMACIÓN',
            '<?php echo $this->session->flashdata('confirmacion'); ?>',
            'success'
          )
        });
      </script>
    <?php endif; ?>
    <!-- ERROR -->
    <?php if ($this->session->flashdata('error')): ?>
      <script type="text/javascript">
        $(document).ready(function(){
          Swal.fire(
            'ERROR',
            '<?php echo $this->session->flashdata('error'); ?>',
            'error'
          )
        });
      </script>
    <?php endif; ?>
  </head>
  <body>
    <div class="text-center">
      <img src="<?php echo base_url(); ?>/assets/images/logo.png" alt="Logo" height="100px">
    </div>
    <nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed"
              data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url(); ?>">MUNDIAL</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <!-- CRUD PARA SELECCIONES -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false">Selecciones<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('selecciones/index');?>">Listado</a></li>
              <li><a href="<?php echo site_url('selecciones/nuevo');?>">Nuevo</a></li>
            </ul>
          </li>
          <!-- CRUD PARA PAISES -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false">Paises<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('paises/index');?>">Listado</a></li>
              <li><a href="<?php echo site_url('paises/nuevo');?>">Nuevo</a></li>
            </ul>
          </li>
          <!-- CRUD PARA JUGADORES -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false">Jugadores<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('jugadores/index');?>">Listado</a></li>
              <li><a href="<?php echo site_url('jugadores/nuevo');?>">Nuevo</a></li>
            </ul>
          </li>
          <!-- CRUD PARA DIRECTORES -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false">Directores<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('directores/index');?>">Listado</a></li>
              <li><a href="<?php echo site_url('directores/nuevo');?>">Nuevo</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false">Uniformes<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('uniformes/index');?>">Listado</a></li>
              <li><a href="<?php echo site_url('uniformes/nuevo');?>">Nuevo</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false">Arbitros<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('arbitros/index');?>">Listado</a></li>
              <li><a href="<?php echo site_url('arbitros/nuevo');?>">Nuevo</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false">Estadios<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('estadios/index');?>">Listado</a></li>
              <li><a href="<?php echo site_url('estadios/nuevo');?>">Nuevo</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
