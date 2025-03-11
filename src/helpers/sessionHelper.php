<?php
class SessionHelper {
    public static  function startSession($id, $type, $token) {
        // session_start();
        // require_once __DIR__ . '/../helpers/auth_session.php';
        $_SESSION['us_id'] = $id;
        $_SESSION['us_type'] = $type;
        $_SESSION['us_token'] = $token;

        setcookie("us_id", $id, time() + 3600, "/", "", true, true);
        setcookie("us_type", $type, time() + 3600, "/", "", true, true);
        setcookie("us_token", $token, time() + 3600, "/", "", true, true);
    }

    public static function isAuthenticated() {
        return isset($_SESSION['us_id']) && isset($_SESSION['us_type']);
    }

    public static function destroySession() {
        session_start();
        session_unset();
        session_destroy();

        if (isset($_COOKIE['us_id'])) {
            setcookie("us_id", "", time() - 3600, "/", "", true, true);
        }
        if (isset($_COOKIE['us_type'])) {
            setcookie("us_type", "", time() - 3600, "/", "", true, true);
        }
        if (isset($_COOKIE['us_token'])) {
            setcookie("us_token", "", time() - 3600, "/", "", true, true);
        }
    }

    public static function sessionDetails($name, $email, $status) {
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['status'] = $status;
        
    }
}
