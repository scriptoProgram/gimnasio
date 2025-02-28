<?php
// Reutiliza la conexión para múltiples consultas seguidas.
class Database {
    private static $host = 'localhost';
    private static $dbname = 'gimnasio';
    private static $user = 'root';
    private static $pass = '';
    private static $conn = null;

    public static function connect() {
        if (self::$conn === null) {
            try {
                $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=utf8mb4";
                self::$conn = new PDO($dsn, self::$user, self::$pass);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->exec("SET NAMES 'utf8mb4'");
            } catch (PDOException $e) {
                die("Error en la conexión a la base de datos: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
