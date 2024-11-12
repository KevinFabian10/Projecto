<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Página de error 404</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/dist/css/adminlte.css">

  <!-- Custom CSS for Alignment and Sizing -->
  <style>
    .error-page {
      max-width: 600px;
      margin: 100px auto;
      text-align: left;
    }
    .error-page .headline {
      font-size: 100px;
      float: left;
      margin-right: 20px;
    }
    .error-page .error-content {
      overflow: hidden;
    }
    .error-page .error-content h3 {
      font-size: 24px;
      
      margin-top: 0;
    }
    .error-page .error-content p {
      font-size: 18px;
      margin: 10px 0;
    }
    .error-page .search-form .form-control {
      height: 40px;
      font-size: 16px;
    }
    .error-page .search-form .btn {
      height: 40px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<section class="content">
  <div class="error-page">
    <h2 class="headline text-warning">404</h2>
    <div class="error-content">
      <h3><i class="fas fa-exclamation-triangle text-warning"></i> ¡Ups! Página no encontrada.</h3>
      <p>
        No pudimos encontrar la página que buscabas. Mientras tanto, puedes <a href="../../index.html">regresar al panel de control</a> o intentar usar el formulario de búsqueda.
      </p>
      <form class="search-form">
        <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Buscar">
          <div class="input-group-append">
            <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form>
    </div>
    <!-- /.error-content -->
  </div>
  <!-- /.error-page -->
</section>

<!-- jQuery -->
<script src="../public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/dist/js/adminlte.min.js"></script>

</body>
</html>
