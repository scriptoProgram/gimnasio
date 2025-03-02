<?php
// session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// require_once(__DIR__ . '../config/database_manual.php');
require_once(__DIR__ . "/../config/database_manual.php");

class UserModel {
    public static function getUserByEmail($email){
        $conn = Database::Connect();
        if ($conn === null) {
            die("Error de conexión a la base de datos.");
        }

        // $stmt = $conn->prepare("SELECT id_empleado AS id, pass, tipo_empleado AS tipo FROM empleado WHERE correo = ?");
        //                 //    UNION 
        //                 //    SELECT id_miembro AS id, pass, 'miembro' AS tipo FROM miembro WHERE correo = ?");
        // $stmt->execute(['email' => $email, 'password' => $password]);

        $stmt = $conn->prepare("SELECT id_empleado AS id, pass, tipo_empleado AS tipo FROM empleado WHERE correo = ?");
        // $stmt = DB::connectAndPrepare("SELECT id_empleado AS id, pass, tipo_empleado AS tipo FROM empleado WHERE correo = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }
}
// die();