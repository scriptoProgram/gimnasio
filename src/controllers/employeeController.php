<?php
require_once './../helpers/validations_register.php';
require_once './../models/employeeModel.php';
// header('Content-Type: application/json; charset=utf-8');
class EmployeeController {

    private $model;

    public function __construct() {
        $this->model = new EmployeeModel();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // print_r($_POST);
            // Personal
            $name = $_POST['name-employee'];
            $email = $_POST['email-employee'];
            $phone = $_POST['phone-employee'];
            $typeEmployee = $_POST['type-employee'] ?? '';
            $dateRegister = date('Y-m-d H:i:s');
            $status = 'activo';
            // Domicilio
            $state = $_POST['state-employee'];
            $city = $_POST['city-employee'];
            $cp = $_POST['cp-employee'];
            $colony = $_POST['colony-employee'];
            $street = $_POST['street-employee'];
            $extNumber = $_POST['numExt-employee'];
            $intNumber = $_POST['numInt-employee'];
            // Documentación

            // Validaciones
            $errors = [];
            
            foreach ([
                'name' => validateName($name),
                'email' => validateEmail($email),
                'phone' => validatePhone($phone),
                'typeEmployee' => validateType($typeEmployee),
                'state' => validateState($state),
                'city' => validateCity($city),
                'cp' => validateCP($cp),
                'colony' => validateColony($colony),
                'street' => validateStreet($street),
                'extNumber' => validateExtNum($extNumber)
            ] as $field => $validation) {
                if ($validation !== true) {
                    $errors[] = $validation;
                }
            }

            if (!empty($errors)) {
                echo json_encode(["success" => false, 'errors' => $errors]);
                exit();
            }

            $result = $this->model->registerEmployee($name, $email, $phone, $dateRegister, $status, $typeEmployee, $state, $city, $cp, $colony, $street, $extNumber, $intNumber);
            echo json_encode($result);
            exit();

        } else {
            echo json_encode(["succsess" => false, 'message' => 'Método inválido del formulario.']);
            exit();
        }
    }
}

// if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
//     $controller = new EmployeeController();
//     $controller->register();
// } else {
//     http_response_code(403);
//     echo 'Acceso denegado';
// }


// $prueba = new EmployeeController();
// $prueba->register();
// var_dump($prueba);