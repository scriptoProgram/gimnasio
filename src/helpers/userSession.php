<?php
require_once 'sessionHelper.php';
class UserSession {
    public static function getUserRole(){
        return $_SESSION['us_type'] ?? 'GUEST';
    }

    public static function isLoggedIn(){
        return SessionHelper::isAuthenticated();
    }
}