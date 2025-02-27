<?php
$host = 'localhost';
$dbname = 'gimnasio';
$user = 'root';
$pass = '';

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'utf8mb4'");
    // echo "Conexión exitosa!";
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}
