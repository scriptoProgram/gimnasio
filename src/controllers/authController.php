<?php
    // require_once __DIR__ . './../models/userModel.php';
    // require_once './../helpers/sessionHelper.php';
    require_once realpath(__DIR__ . '/../models/userModel.php');
    require_once realpath(__DIR__ . '/../helpers/sessionHelper.php');

    class AuthController {
        public static function login($email, $password) {
            $user = UserModel::getUserByEmail($email);

            if ($user && password_verify($password, $user['pass'])) {
                $token = bin2hex(random_bytes(32));
                SessionHelper::startSession($user['id'], $user['tipo'], $token);
                header("Location: /gimnasio/views/main.php");
                exit();
            } else {
                // return "Correo o contraseña incorrectos.";
                $_SESSION['login_error'] = "Correo o contraseña incorrectos.";
                header("Location: /gimnasio");
                exit();
            }
            // if ($user) {
            //     if (password_verify($password, $user['pass'])) {
            //         sessionHelper::login($user['id'], $user['tipo']);
            //         header('Location: /');
            //     } else {
            //         header('Location: /login?error=invalid_credentials');
            //     }
            // } else {
            //     header('Location: /login?error=invalid_credentials');
            // }
        }

        public static function logout() {
            // sessionHelper::logout();
            // header('Location: /login');
            SessionHelper::destroySession();
            header("Location: /gimnasio");
            exit();
        }
    }
