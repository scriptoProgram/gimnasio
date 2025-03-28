<?php
// session_start();
require_once __DIR__ . '/../../src/helpers/auth_session.php';
require_once __DIR__ . '/../../src/controllers/siteController.php';
require_once __DIR__ . '/../../src/config/url_config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo URL_CSS ?>general.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php SiteController::addNavbar(); ?>
    <main class="absolute left-44 pt-[1.5rem] pl-[1.5rem] pb-[1.5rem]">
    </main>
    <script type="module" src="<?php echo URL_JS ?>main.js"></script>
</body>
</html>