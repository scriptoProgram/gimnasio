<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once realpath(__DIR__ . './../config/database.php');

class UserModel
{
    public static function getUserByEmail($email)
    {
        // $conn = Database::Connect();
        // if ($conn === null) {
        //     die("Error de conexión a la base de datos.");
        // }

        // $stmt = $conn->prepare("SELECT id_empleado AS id, pass, tipo_empleado AS tipo FROM empleado WHERE correo = ?");
        //                 //    UNION 
        //                 //    SELECT id_miembro AS id, pass, 'miembro' AS tipo FROM miembro WHERE correo = ?");
        // $password = '123456'; // Contraseña en texto plano (la que el usuario introduce)
        // $stmt = $pdo->prepareAndConnect("SELECT id_empleado AS id, pass, tipo_empleado AS tipo FROM empleado WHERE correo = ?");
        // $stmt->execute(['email' => $email, 'password' => $password]);
        // $stmt->execute([$email]);
        // return $stmt->fetch();
        $stmt = $pdo->prepare('SELECT * FROM `empleado` WHERE id_empleado = 1;');

        // Ejecutar la consulta
        $stmt->execute();

        // Verificar si existe el usuario
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verificar la contraseña utilizando password_verify
            if (password_verify($password, $user['pass'])) {
                echo "Login exitoso!";
            } else {
                echo "Contraseña incorrecta!";
            }
        } else {
            echo "Usuario no encontrado!";
        }
    }
}

// $password = '123456'; // Contraseña en texto plano (la que el usuario introduce)
// $stmt = $pdo->prepare('SELECT * FROM `empleado` WHERE id_empleado = 1;');

// // Ejecutar la consulta
// $stmt->execute();

// // Verificar si existe el usuario
// if ($stmt->rowCount() > 0) {
//     $user = $stmt->fetch(PDO::FETCH_ASSOC);

//     // Verificar la contraseña utilizando password_verify
//     if (password_verify($password, $user['pass'])) {
//         echo "Login exitoso!";
//     } else {
//         echo "Contraseña incorrecta!";
//     }
// } else {
//     echo "Usuario no encontrado!";
// }