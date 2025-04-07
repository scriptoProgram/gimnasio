<?php
// Datos personales
function validateName($name) {
    $name = trim($name);

    if (empty($name)) {
        return "El campo Nombre no puede estar vacío.";
    }

    $length = str_word_count($name);
    if ($length < 3) {
        return "El nombre debe incluir al menos un nombre y dos apellidos.";
    }

    return true;
    // return !empty(trim($name)) ? true : "El campo nombre no puede estar vacío.";

}

function validateEmail($email) {
    // if (!empty(trim($email))) return "El campo email no puede estar vacío.";
    // return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : "Correo con formato invalido";
    $email = trim($email);

    if (empty($email)) {
        return "El campo email no puede estar vacío.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "El email no es válido.";
    }

    return true;
}

function validatePhone($phone) {
    $phone = trim($phone);

    if (empty($phone)) {
        return "El campo Teléfono no puede estar vacío.";
    }

    if (!preg_match("/^[0-9]{7,10}$/", $phone)) {
        return "El número de Teléfono no es válido.";
    }

    return true;
    // if (!empty(trim($phone))) return "El campo Teléfono no puede estar vacío.";
    // return preg_match("/^[0-9]{7,10}$/", $phone) ? true : "Teléfono inválido.";

    // return !empty(trim($phone)) && preg_match("/^[0-9]{7,10}$/", $phone);
}

function validateType($typeEmployee) {
    // if (!empty(trim($typeEmployee)))  "Debe asignar un tipo de empleado.";
    return !empty(trim($typeEmployee)) ? true : "Debe asignar un tipo de empleado.";
}

// Domicilio
function validateState($state) {
    // return !empty(trim($state));
    return !empty(trim($state)) ? true : "El campo Estado no puede estar vacío.";
}
function validateCity($city) {
    // return !empty(trim($city));
    return !empty(trim($city)) ? true : "El campo Ciudad no puede quedar vacío.";
}
function validateCP($cp) {
    // return !empty(trim($cp));
    return !empty(trim($cp)) ? true : "Falta Código Postal.";
}
function validateColony($colony) {
    // return !empty(trim($colony));
    return !empty(trim($colony)) ? true : "Agrega el Barrio o Colonia del domicilio.";
}
function validateStreet($street) {
    // return !empty(trim($street));
    return !empty(trim($street)) ? true : "El campo Calle, no puede estar vacío.";
}
function validateExtNum($extNumber) {
    // return !empty(trim($extNumber));
    return !empty(trim($extNumber)) ? true : "Falta insertar el Numero Exterior del domicilio.";
}
// function validateIntNum($intNumber) {
//     return !empty(trim($intNumber));
// }

// Documentacion
function validateFile($file) {
    $fileExtension = ['pdf', 'jpg', 'png'];
    $maxSize = 2 * 1024 * 1024;

    if ($file['error'] === UPLOAD_ERR_OK) {
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        return in_array($extension, $fileExtension) && $file['size'] <= $maxSize;
    }

    return false;
}