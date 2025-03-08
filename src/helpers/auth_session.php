<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../helpers/sessionHelper.php';

if (!SessionHelper::isAuthenticated()) {
    header("Location: /gimnasio");
    exit();
}