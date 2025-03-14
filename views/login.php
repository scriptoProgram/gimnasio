<?php
session_start();
// require_once '../src/config/url_config.php';
require_once __DIR__ . '/../src/controllers/authController.php';
require_once __DIR__ . '/../src/config/url_config.php';
$error = "";

if (isset($_SESSION['us_id'])) {
    header("Location: views/main.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once realpath(__DIR__ . '/../src/controllers/AuthController.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $error = AuthController::login($email, $password);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login -Gimnasio</title>
    <link rel="stylesheet" href="<?php echo URL_CSS;?>normalize.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="<?php echo URL_CSS;?>login.css">
</head>

<body>
    <div class="background"></div>
    <div id="content-form">
        <div id="header-form">
            <p>INFAMOUS GYM</p>
            <p>fitness club</p>
        </div>
        <form method="POST" id="formLogin">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                    <path
                        d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671" />
                    <path
                        d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791" />
                </svg>
                <input type="email" name="email" placeholder="Correo" required>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                    <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                    <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                    <path d="M15 16h.01"></path>
                    <path d="M12.01 16h.01"></path>
                    <path d="M9.02 16h.01"></path>
                </svg>
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            <div>
                <button class='btn btn_success' type="submit" id="btnLogin">Iniciar sesión</button>
            </div>
        </form>
        <?php
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
        ?>
        <?php if (isset($_SESSION['login_error'])): ?>
            <div>
                <p class="text-red-500">
                    <?php
                        echo $_SESSION['login_error'];
                        unset($_SESSION['login_error']); // Elimina el mensaje al mostrarlo
                    ?>
                </p>
            </div>
        <?php endif; ?>
</body>

</html>