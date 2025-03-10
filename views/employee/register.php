<?php
    require_once __DIR__ . '/../../src/helpers/auth_session.php';
    require_once __DIR__ . '/../../src/controllers/siteController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php SiteController::addNavbar(); ?>
</body>
</html>