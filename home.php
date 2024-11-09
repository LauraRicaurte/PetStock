<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <!-- Estilizamos el mensaje -->
    <div style="text-align: center; font-size: 20px; font-weight: bold; color: #4CAF50; margin: 20px 0;">
      <?php echo display_msg($msg); ?>
    </div>
  </div>
  <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <!-- Mostramos la imagen -->
         <img src="uploads/imagenes/mascotas.jpg" alt="Inicio" class="img-fluid" style="max-width: 100%; height: auto;">
      </div>
    </div>
  </div>
</div>
<?php include_once('layouts/footer.php'); ?>
