<?php
    class SessionHelper {
        public static  function startSession ($id, $type, $token) {
            session_start();
            $_SESSION['us_id'] = $id;
            $_SESSION['us_type'] = $type;
            $_SESSION['us_token'] = $token;

            setcookie("us_id", $id, time() + 3600, "/", "", true, true);
            setcookie("us_type", $type, time() + 3600, "/", "", true, true);
            setcookie("us_token", $token, time() + 3600, "/", "", true, true);
        }

        public static function isAuthenticated() {
            return isset($_SESSION['us_id']) && isset($_SESSION['us_type']);
        }

        public static function destroySession() {
            session_start();
            session_unset();
            session_destroy();

            if (isset($_COOKIE['us_id'])) {
                setcookie("us_id", "", time() - 3600, "/", "", true, true);
            }
            if (isset($_COOKIE['us_type'])) {
                setcookie("us_type", "", time() - 3600, "/", "", true, true);
            }
            if (isset($_COOKIE['us_token'])) {
                setcookie("us_token", "", time() - 3600, "/", "", true, true);
            }
            // setcookie("us_id", "", time() - 3600, "/");
            // setcookie("us_type", "", time() - 3600, "/");
            // setcookie("us_token", "", time() - 3600, "/");
        }
    }
    ?>
    <?php
session_start(); // Asegura que la sesión está iniciada
$userRole = $_SESSION['role'] ?? 'guest'; // Obtener rol de usuario

?>

<!-- Sidebar -->
<nav id="sidebar" class="d-flex flex-column bg-dark text-white vh-100 p-3">
    <h4 class="text-center">🏋️ Gimnasio</h4>
    <hr>

    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="dashboard.php" class="nav-link text-white">
                <i class="fas fa-home"></i> Inicio
            </a>
        </li>
        <li class="nav-item">
            <a href="usuarios.php" class="nav-link text-white">
                <i class="fas fa-users"></i> Gestión de Usuarios
            </a>
        </li>
        <li class="nav-item">
            <a href="pagos.php" class="nav-link text-white">
                <i class="fas fa-credit-card"></i> Gestión de Pagos
            </a>
        </li>
        <li class="nav-item">
            <a href="empleados.php" class="nav-link text-white">
                <i class="fas fa-user-tie"></i> Gestión de Empleados
            </a>
        </li>
        <li class="nav-item">
            <a href="clases.php" class="nav-link text-white">
                <i class="fas fa-calendar-alt"></i> Clases y Horarios
            </a>
        </li>
        <li class="nav-item">
            <a href="reportes.php" class="nav-link text-white">
                <i class="fas fa-chart-line"></i> Reportes y Estadísticas
            </a>
        </li>
        <li class="nav-item">
            <a href="inventario.php" class="nav-link text-white">
                <i class="fas fa-dumbbell"></i> Gestión de Equipos
            </a>
        </li>
        <li class="nav-item">
            <a href="anuncios.php" class="nav-link text-white">
                <i class="fas fa-bullhorn"></i> Anuncios y Promociones
            </a>
        </li>
        <hr>
        <li class="nav-item">
            <a href="logout.php" class="nav-link text-danger">
                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
            </a>
        </li>
    </ul>
</nav>

<!-- Estilos CSS -->
<style>
    #sidebar {
        width: 250px;
        position: fixed;
        height: 100vh;
        overflow-y: auto;
    }

    .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 5px;
    }
</style>

<!-- Agregar Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
