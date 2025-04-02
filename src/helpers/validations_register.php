<?php
function validateName($name) {
    return !empty(trim($name));
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validatePhone($phone) {
    return preg_match("/^[0.9]{7-10}$/" ,$phone);
}

function validateType($typeEmployee) {
    return !empty($typeEmployee);
}