<?php
    session_start();
    require_once './../src/helpers/sessionHelper.php';

    if (!SessionHelper::isAuthenticated()) {
        header("Location: /gimnasio/public/index.php");
        exit();
    }
    echo "Bienvenido, " . $_SESSION['us_id'] . " (ID: " . $_SESSION['us_id'] . ")";

?>
<a href="/gimnasio/public/logout.php">Cerrar sesión</a>