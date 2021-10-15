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
        
        if(preg_match('/\s/', $user)){
            $error .= '<li>' . SYMBOLS_NOT_ALLOWED .'</li>';
        }

        if(!preg_match('/^[\w\-]+@[\w\-]+.[\w\-]+$/', $email)){
            $error .= '<li>' . INVALID_EMAIL  . '</li>';
        }

        if(empty($user) || empty($email) || empty($password) || empty($cpassword)){
            $error .= '<li>' . FIELDS_MISSING . '</li>';
        } else{

        }
    }



    require 'view/register.view.php';

?>