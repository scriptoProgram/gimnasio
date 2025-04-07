<?php
include_once __DIR__ . '/../config/database_auto.php';

class EmployeeModel {
    function registerEmployee($name, $email, $phone, $date, $status, $type, $state, $city, $cp, $suburb, $street, $extNumber, $intNumber) {

        $comprobated = DB::connectAndPrepare("SELECT * FROM empleado WHERE correo = ?");
        $comprobated->bindParam(1, $email);
        $comprobated->execute();

        if ($comprobated->fetch()) {
            return ['succes' => 'error', 'message' => 'El correo ya está registrado.'];
        }

        $insertHome = DB::connectAndPrepare("INSERT INTO direccion (estado, ciudad, codigo_postal, colonia, calle, numext, numint)  VALUES (?, ?, ?, ?, ?, ?, ?)");
        $insertHome->bindParam(1, $state);
        $insertHome->bindParam(2, $city);
        $insertHome->bindParam(3, $cp);
        $insertHome->bindParam(4, $suburb);
        $insertHome->bindParam(5, $street);
        $insertHome->bindParam(6, $extNumber);
        $insertHome->bindParam(7, $intNumber);

        if ($insertHome->execute()) {
            $insert = DB::connectAndPrepare("INSERT INTO empleado (nombre, correo, telefono, f_ingreso, estatus, tipo_empleado, id_direccion) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $insert->bindParam(1, $name);
            $insert->bindParam(2, $email);
            $insert->bindParam(3, $phone);
            $insert->bindParam(4, $date);
            $insert->bindParam(5, $status);
            $insert->bindParam(6, $type);
            $insert->bindParam(7, $idHome);
            
            if ($insert->execute()) {
                return ['succes' => true, 'message' => 'Empleado registrado correctamente.'];
            }
        } else {
            return ['succes' => false, 'message' => 'Error al registrar la dirección.'];
        }
        return ['succes' => false, 'message' => 'Error al registrar el empleado.'];
        die();
    }
}
// $prueba = new EmployeeModel();
// $prueba->registerEmployee('Juan', 'juan@gmail.com', '123456789', 'administrador', 'activo', 'Estado de México', 'Toluca', '50000', 'Centro', 'Calle 1', '123', '456'); 
// var_dump($prueba);