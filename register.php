<?php

    require 'db.php';
    require_once 'autoload.php';
    
    $error = '';
    $submit = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = esc($_POST['user']);
        $email = esc($_POST['email']);
        $password = esc($_POST['password']);
        $cpassword = esc($_POST['password_confirm']);
        $reg_date = date("Y-m-d H:i:s");
        
    }

    require 'view/register.view.php';

?>