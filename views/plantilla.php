<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=COMPANY?>  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include './views/inc/link.php'?>  
</head>
<body class="hold-transition sidebar-mini">
  <?php
  $peticionAjax=false;
  require_once './controllers/viewsController.php';
  $ins_vista= new viewsController();
  $vistas= $ins_vista->get_views_controller();

  


  
  ?>
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include './views/inc/navbar.php'?> 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include './views/inc/sidebar.php'?>
  <!-- Content Wrapper. Contains page content -->
  
    <?php
    include $vistas;
    
  
?>

  <!-- /.content-wrapper -->
  <?php include './views/inc/footer.php'?>
</div>
<!-- ./wrapper -->
<?php include './views/inc/script.php'?>
</body>
</html>
