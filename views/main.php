<?php
// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }
require_once __DIR__ . '../../src/controllers/siteController.php';
require_once __DIR__ . '../../src/helpers/auth_session.php';    
// $siteController = new SiteController();
// $siteController->addNavbar();
// SiteController::addNavbar();
SiteController::addNavbar();
