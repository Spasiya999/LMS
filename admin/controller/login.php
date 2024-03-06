<?php
$first_name = $last_name = $password = $confirm_password = '';
$first_name_err = $last_name_err =  $password_err = $confirm_password_err = '';

$validation_failed = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'db-config.php';
    //first name validation
    if (empty(trim($_POST['first_name']))) {
        $first_name_err = "Please enter first name";
        $validation_failed = true;
    } else {
        $first_name = trim($_POST['first_name']);
    }
    //last name validation
    if (empty(trim($_POST['last_name']))) {
        $last_name_err = "Please enter last name";
        $validation_failed = true;
    } else {
        $last_name = trim($_POST['last_name']);
    }
    // username validation
    if (empty(trim($_POST['username']))) {
        $username_err = "Please Enter Username";
        $validation_failed = true;
    } else {
        $username = trim($_POST['username']);
    }
}
?>