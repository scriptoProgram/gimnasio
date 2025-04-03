<?php
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
            
            
            // Primer validación
            // if (!validateName($name) || !validateEmail($email) || !validatePhone($phone)) {
            //     echo json_encode(["success" => false, 'message' => 'Datos invalidos']);
            //     exit();
            // }

            $result = $this->model->registerEmployee($name, $email, $phone, $typeEmployee, $state, $city, $cp, $colony, $street, $extNumber, $intNumber);
            echo json_encode($result);
            exit();

        } else {
            echo json_encode(["succsess" => false, 'message' => 'Método inválido del formulario.']);
            exit();
        }
    }
}

$prueba = new EmployeeController();
$prueba->register();
var_dump($prueba);