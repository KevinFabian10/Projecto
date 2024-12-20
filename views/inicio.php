<?php
session_start();
define("BASE_URL", "/tallerPagina/views/"); // Ajusta BASE_URL según la estructura de tu proyecto
require_once("../config/conexion.php");

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION["usu_id"])) {
    // Redirige a una página de error o a la página de inicio de sesión si el usuario no está logueado
    header("Location: " . BASE_URL . "404.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio - Administrador</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Custom CSS for styling boxes -->
  <style>
    .info-box {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px;
      color: #fff;
      border-radius: 5px;
      margin-bottom: 20px;
    }
    .bg-blue { background-color: #007bff; }
    .bg-green { background-color: #28a745; }
    .bg-yellow { background-color: #ffc107; }
    .bg-red { background-color: #dc3545; }
    .info-box i {
      font-size: 2em;
    }
    .logout-btn {
      position: absolute;
      top: 10px;
      right: 10px;
    }
  </style>
</head>
<body>

<!-- Botón de Cerrar Sesión -->
<div class="logout-btn">
  <a href="logout.php" class="btn btn-danger">
    <i class="fas fa-sign-out-alt"></i> Cerrar sesión
  </a>
</div>

<div class="container my-4">
  <h1 class="text-center mb-4">Dashboard de Inicio</h1>
  <p class="text-center">Bienvenido, <strong><?php echo htmlspecialchars($_SESSION["nombre"]); ?></strong>!</p>
  
  <div class="row">
    <!-- Box 1 -->
    <div class="col-lg-3 col-md-6">
      <div class="info-box bg-blue">
        <div>
          <h2>150</h2>
          <p>New Orders</p>
        </div>
        <i class="fas fa-shopping-cart"></i>
      </div>
    </div>
    <!-- Box 2 -->
    <div class="col-lg-3 col-md-6">
      <div class="info-box bg-green">
        <div>
          <h2>53%</h2>
          <p>Bounce Rate</p>
        </div>
        <i class="fas fa-chart-line"></i>
      </div>
    </div>
    <!-- Box 3 -->
    <div class="col-lg-3 col-md-6">
      <div class="info-box bg-yellow">
        <div>
          <h2>44</h2>
          <p>User Registrations</p>
        </div>
        <i class="fas fa-user-plus"></i>
      </div>
    </div>
    <!-- Box 4 -->
    <div class="col-lg-3 col-md-6">
      <div class="info-box bg-red">
        <div>
          <h2>65</h2>
          <p>Unique Visitors</p>
        </div>
        <i class="fas fa-users"></i>
      </div>
    </div>
  </div>
</div>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
