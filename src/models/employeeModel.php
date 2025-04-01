<?php
include_once __DIR__ . '/../config/database_auto.php';

class EmployeeModel {
    function registerEmployee($name, $email, $phone, $type, $state, $city, $cp, $suburb, $street, $extNumber, $intNumber) {

        $comprobated = DB::connectAndPrepare("SELECT * FROM empleado WHERE correo = ?");
        $comprobated->bindParam(1, $email);
        $comprobated->execute();

        if ($comprobated->fetch()) {
            return ['succes' => 'error', 'message' => 'El correo ya está registrado.'];
        }

        // $date = date('Y-m-d H:i:s');
        // $type = $type == 'administrador' ? 'ADMINISTRADOR' : 'usuario';
        // $status = 'activo';
        // $state = $state == 'Estado de México' ? 'Estado de México' : 'otro estado';
        // $city = $city == 'Toluca' ? 'Toluca' : 'otra ciudad';
        // $cp = $cp == '50000' ? '50000' : 'otro cp';
        // $suburb = $suburb == 'Centro' ? 'Centro' : 'otro suburbio';
        // $street = $street == 'Calle 1' ? 'Calle 1' : 'otra calle';
        // $extNumber = $extNumber == '1' ? '1' : 'otro extNumber';    
        // $intNumber = $intNumber == '1' ? '1' : 'otro intNumber';

        $insert = DB::connectAndPrepare("INSERT INTO empleado (nombre, correo, telefono, f_ingreso, estatus, tipo_empleado, estado, ciudad, codigo_postal, colonia, calle, numext, numint) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $insert->bindParam(1, $name);
        $insert->bindParam(2, $email);
        $insert->bindParam(3, $phone);
        $insert->bindParam(4, $date);
        $insert->bindParam(5, $status);
        $insert->bindParam(6, $type);
        $insert->bindParam(7, $state);
        $insert->bindParam(8, $city);
        $insert->bindParam(9, $cp);
        $insert->bindParam(10, $suburb);
        $insert->bindParam(11, $street);
        $insert->bindParam(12, $extNumber);
        $insert->bindParam(13, $intNumber);
        
        if ($insert->execute()) {
            return ['succes' => true, 'message' => 'Empleado registrado correctamente.'];
        }
        return ['succes' => false, 'message' => 'Error al registrar el empleado.'];
        // die();
    }
}
// $prueba = new EmployeeModel();
// $prueba->registerEmployee('Juan', 'juan@gmail.com', '123456789', 'administrador', 'activo', 'Estado de México', 'Toluca', '50000', 'Centro', 'Calle 1', '123', '456'); 
// var_dump($prueba);