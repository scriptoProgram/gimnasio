<?php
    session_start();
    require_once './../src/helpers/sessionHelper.php';

    if (!SessionHelper::isAuthenticated()) {
        header("Location: /gimnasio/");
        exit();
    }
    echo "Bienvenido, " . $_SESSION['us_id'] . " (ID: " . $_SESSION['us_id'] . ")";

?>
<a href="/gimnasio/src/public/logout.php">Cerrar sesión</a>