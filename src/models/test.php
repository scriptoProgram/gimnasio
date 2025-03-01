<?php
// require_once realpath(__DIR__ . './../config/database_auto.php');
require_once './../config/database_auto.php';

$emp = DB::connectAndPrepare("SELECT * FROM empleado");
$emp->execute();
$empleados = $emp->fetchAll(PDO::FETCH_ASSOC);
// var_dump($empleados);

foreach ($empleados AS $empleado) {
    // var_dump($empleado);
    $id = $empleado['id_empleado'];
    $hashedPass = password_hash($empleado['pass'], PASSWORD_DEFAULT);
    // echo $hashedPass;
    // $updateSql = DB::connectAndPrepare("UPDATE empleados SET pass = ? WHERE id_empleado = ?");
    // $updateSql->execute([$hashedPass, $id]);
    $updateSql = DB::connectAndPrepare("UPDATE empleado SET pass = :pass WHERE id_empleado = :id");
    // $updateStmt = $pdo->prepare($updateSql);
    $updateSql->execute(['pass' => $hashedPass, 'id' => $id]);
    // $empleadosAct = $updateSql->fetch(PDO::FETCH_ASSOC);
}
echo 'Horarios actualizados';

// var_dump($empleadosAct);
