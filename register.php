<?php

    require 'db.php';
    require_once 'autoload.php';
    
    $error = '';
    $submit = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = filter_var($_POST['user'], FILTER_SANITIZE_STRING);
        $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];
        $cpassword = $_POST['password_confirm'];
        $reg_date = date("Y-m-d H:i:s");
    }

    require 'view/register.view.php';

?>