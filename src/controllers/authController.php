<?php
    require_once realpath(__DIR__ . '/../models/userModel.php');
    require_once realpath(__DIR__ . '/../helpers/sessionHelper.php');

    class AuthController {
        public static function login($email, $password) {
            $user = UserModel::getUserByEmail($email);

            if ($user && password_verify($password, $user['pass'])) {
                // session_start();
                $token = bin2hex(random_bytes(15));
                SessionHelper::startSession($user['id'], $user['tipo'], $token);
                
                // DETALLLES DEL USUARIO
                $userDetails = UserModel::getUserById($user['id']);
                if ($userDetails) {
                    SessionHelper::sessionDetails($userDetails['nombre'], $userDetails['correo'], $userDetails['estatus']);
                    // echo '<pre>';
                    // print_r($_SESSION);
                    // echo '</pre>';
                }

                header("Location: /gimnasio/views/main.php");
                exit();

            } else {
                // return "Correo o contraseña incorrectos.";
                $_SESSION['login_error'] = "Correo o contraseña incorrectos.";
                header("Location: /gimnasio");
                exit();
            }
        }

        public static function logout() {
            SessionHelper::destroySession();
            header("Location: /gimnasio");
            exit();
        }
    }
