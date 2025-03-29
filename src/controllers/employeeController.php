<?php
require_once './src/config/url_config.php';
require_once URL_MODELS . 'employeeModel.php';

class EmployeeController {

    private $model;

    public function __construct() {
        $this->model = new EmployeeModel();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name-employee'];
            echo $name;
        }
    }
}