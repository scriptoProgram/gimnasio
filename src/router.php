<!-- < ?php
session_start();

$baseDir = dirname(__DIR__); // Obtiene el directorio raíz

// Incluye los controladores necesarios
require_once $baseDir . "/src/controllers/authController.php";

// Verifica si el usuario está autenticado
$isLoggedIn = isset($_SESSION['user_id']); 

// Obtiene la ruta de la URL
$requestUri = $_SERVER['REQUEST_URI'];
$requestUri = explode("?", $requestUri)[0]; // Elimina parámetros GET

// Definir rutas permitidas
$routes = [
    "/" => "login.php",
    "/dashboard" => $isLoggedIn ? "dashboard.php" : "login.php",
    "/logout" => function() {
        session_destroy();
        header("Location: /");
        exit();
    }
];

// Verifica si la ruta existe
if (array_key_exists($requestUri, $routes)) {
    $page = $routes[$requestUri];

    // Si es una función, ejecutarla
    if (is_callable($page)) {
        $page();
    } else {
        include $baseDir . "/src/views/" . $page;
    }
} else {
    http_response_code(404);
    echo "Página no encontrada";
} -->
