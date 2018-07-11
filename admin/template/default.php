<!DOCTYPE html>
<html>
<?php include 'template/parsial/head.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include 'template/parsial/header.php';?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   <?php include 'template/parsial/sidebar.php';?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php eval($content);
    ?>
     </div>
  <!-- /.content-wrapper -->
 <?php require_once 'template/parsial/footer.php'; ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php require_once 'template/parsial/scripts.php';?>
</body>
</html>
