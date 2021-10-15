<?php

    require 'db.php';
    require_once 'autoload.php';

    check_session();

    $error = '';
    $submit = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = $_POST['user'];
        $password = $_POST['password'];

        if(empty($user) || empty($password)){
            $error .= '<li>' . FIELDS_MISSING . '</li>';
        } else{
        
        }



    require 'view/login.view.php';    

?>