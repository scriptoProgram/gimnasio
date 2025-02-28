<?php
class DB {
    public static function connectAndPrepare($query) {
        $host = 'localhost';
        $dbname = 'gimnasio';
        $username = 'root';
        $pass = '';

        try {
            $dsn ="mysql:host=$host;dbname=$dbname;charset=utf8mb4";
            $pdo = new PDO($dsn, $username, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET NAMES 'utf8mb4'");

            return $pdo->prepare($query);
        } catch (PDOException $e) {
            die('Error de conexión a la base de datos: ' . $e->getMessage());
        }
    }
}
// private static $host = 'localhost';
// private static $dbname = 'gimnasio';
// private static $user = 'root';
// private static $pass = '';
// private static $conn = null;

// public static function connect() {
//     if (self::$conn === null) {
//         try {
//             $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=utf8mb4";
//             self::$conn = new PDO($dsn, self::$user, self::$pass);
//             self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             self::$conn->exec("SET NAMES 'utf8mb4'");
//         } catch (PDOException $e) {
//             die("Error en la conexión a la base de datos: " . $e->getMessage());
//         }
//     }
//     return self::$conn;
// }