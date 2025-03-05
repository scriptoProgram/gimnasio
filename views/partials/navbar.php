<?php
session_start();
function renderNavbar($role) {
    echo "<script src='https://unpkg.com/@tailwindcss/browser@4'></script>";
    echo '<nav class="bg-[#101828] absolute left-0 w-[11rem] h-full">';
    // echo '<div class="bg-[#50d71e]">';
    echo "<ul>";
        echo "<li><a class='text-gray-400' href='main.php'> Inicio</a></li>";

    echo "</ul>";
    echo "</nav>";
    // echo "</div>";
}