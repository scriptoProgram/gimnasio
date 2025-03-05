<?php

function renderNavbar($role) {
    echo "<nav>";
    echo "<ul>";

    if ($role === 'ADMIN') {
        echo "<li><a href='/admin'>Panel de Admin</a></li>";
    } elseif ($role === 'TRAINER') {
        echo "<li><a href='/trainer'>Panel de Entrenador</a></li>";
    } else {
        echo "<li><a href='/'>Inicio</a></li>";
    }

    echo "</ul>";
    echo "</nav>";
}