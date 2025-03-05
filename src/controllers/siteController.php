<?php
require_once __DIR__ . '/../helpers/userSession.php';

class SiteController {
    // private $userRole;

    // public function __construct() {
    //     $this->userRole = UserSession::getUserRole();
    // }

    public static function addNavbar() {
        $userRole =UserSession::getUserRole();
        require_once __DIR__ . '/../../views/partials/navbar.php';
        // renderNavbar($this->userRole);
        renderNavbar($userRole);
    }
}
// $siteController = new SiteController();