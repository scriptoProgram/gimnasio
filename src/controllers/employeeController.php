<?php
// require_once './../config/url_config.php';
require_once './../helpers/validations_register.php';
require_once './../models/employeeModel.php';

class EmployeeController {

    private $model;

    public function __construct() {
        $this->model = new EmployeeModel();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            print_r($_POST);
            // Personal
            $name = $_POST['name-employee'];
            $email = $_POST['email-employee'];
            $phone = $_POST['phone-employee'];
            $typeEmployee = $_POST['type-employee'] ?? '';
            // Domicilio
            $state = $_POST['state-employee'];
            $city = $_POST['city-employee'];
            $cp = $_POST['cp-employee'];
            $colony = $_POST['colony-employee'];
            $street = $_POST['street-employee'];
            $extNumber = $_POST['numExt-employee'];
            $intNumber = $_POST['numInt-employee'];
            // Documentación
            
            // echo $name;
            if (!validateName($name) || !validateEmail($email)) {
                echo json_encode(["success" => false, 'message' => 'Datos invalidos']);
                exit();
            }
        } else {
            $response = ["error" => "Método invalido del fómulario."];
            return $response;
        }
    }
}

$prueba = new EmployeeController();
$prueba->register();
var_dump($prueba);