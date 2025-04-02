<?php
function validateName($name) {
    return !empty(trim($name));
}

function validateEmail($email) {
    return filter_var(!empty($email), FILTER_VALIDATE_EMAIL);
}

function validatePhone($phone) {
    return preg_match("/^[0.9]{7-10}$/" ,!empty($phone));
    // if (!empty($phone)) {
    // }
}

function validateType($typeEmployee) {
    return !empty($typeEmployee);
}

function validateFile($file) {
    $fileExtension = ['pdf', 'jpg', 'png'];
    $maxSize = 2 * 1024 * 1024;

    if ($file['error'] === UPLOAD_ERR_OK) {
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        return in_array($extension, $fileExtension) && $file['size'] <= $maxSize;
    }

    return false;
}