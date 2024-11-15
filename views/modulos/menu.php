<?php
// Inicia la sesión si aún no ha sido iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Asegúrate de incluir el archivo de conexión si es necesario
require_once("../../config/conexion.php");

?>
<div class="info">
    <input type="hidden" id="usu_idx" value="<?php echo $_SESSION["usu_id"] ?>">
    <a href="#" class="d-block"><?php echo $_SESSION["nombre"]; ?></a>
</div>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Aquí puedes añadir más opciones de menú -->
        <li class="nav-header">EXAMPLES</li>
        <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Usuarios</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Menu</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Social Media</p>
            </a>
        </li>
        <li class="nav-header">SALIR</li>
        <li class="nav-item">
            <a href="../logout.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Logout</p>
            </a>
        </li>
    </ul>
</nav>
