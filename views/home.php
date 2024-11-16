<?php
define("BASE_URL", "/tallerPagina/views/"); // Ajusta BASE_URL según la estructura de tu proyecto
require_once("../config/conexion.php");

if (!isset($_SESSION["usu_id"])) {
    // Redirige a una página de error o a la página de inicio de sesión si el usuario no está logueado
    header("Location: " . BASE_URL . "404.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <?php require_once("modulos/css.php"); ?>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->


  <?php require_once("modulos/header.php"); ?>
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
   
        <div class="info">
          <p class="text-white">Alexander Pierce</p>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <?php require_once("modulos/menu.php"); ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Administracion</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require_once("modulos/footer.php"); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php require_once("modulos/js.php"); ?>


</body>
<?php
session_start();
require_once("../config/conexion.php");

// Verificar si el usuario está logueado
if (!isset($_SESSION["usu_id"])) {
    // Si no ha iniciado sesión, redirigir a la página de error
    header("Location: " . BASE_URL . "views/404.php");
    exit();
}
?>

</html>
} else {
    /* Si no ha iniciado sesión, se redirecciona a la ventana de error */
    header("Location:" . Conectar::ruta() . "views/404.php");
    exit();
}