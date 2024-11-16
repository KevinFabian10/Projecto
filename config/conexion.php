<?php
// Inicia la sesión si aún no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class Conectar {
    protected $dbh;

    protected function Conexion() {
        try {
            // Configuración de conexión a la base de datos sin contraseña
            $this->dbh = new PDO("mysql:host=localhost;dbname=test", "root", "");
            // Establece el modo de error para lanzar excepciones
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->dbh;
        } catch (PDOException $e) {
            // Imprime el mensaje de error en caso de falla
            die("¡Error en la conexión a la base de datos!: " . $e->getMessage());
        }
    }

    public function set_names() {
        // Configura la conexión para usar UTF-8
        return $this->Conexion()->query("SET NAMES 'utf8'");
    }

    public static function ruta() {
        // Define la URL base de tu proyecto
        return "http://localhost/tallerPagina/";
    }
}
?>
