<?php
require_once __DIR__ . '/../helpers/userSession.php';

class SiteController {
    public static function addNavbar() {
        $userRole = UserSession::getUserRole();
        require_once __DIR__ . '/../../views/partials/navbar.php';
        renderNavbar($userRole);
    }
}