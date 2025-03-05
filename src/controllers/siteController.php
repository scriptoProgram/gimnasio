<?php
require_once '../helpers/UserSession.php';

class SiteController {
    private $userRole;

    public function __construct() {
        $this->userRole = UserSession::getUserRole();
    }

    public function addNavbar() {
        require_once '../../views/partials/navbar.php';
        renderNavbar($this->userRole);
    }
}