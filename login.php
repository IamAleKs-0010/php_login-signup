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
            if(empty($error)){

                $query = "SELECT * FROM users WHERE user = :user AND pass = :password LIMIT 1";
                $stmt = $conn -> prepare($query);
                $stmt -> execute(array(
                                       ':user' => $user,
                                       ':password' => $password,
                                      ));
                
                $check = $stmt -> fetch();

                if($check != true){
                    $error .= '<li>' . LOGIN_FAIL . '</li>';
                } else{
                    $_SESSION['user'] = $user;
                    header('Location: content.php');
                }
            }
        }
    }

    require 'view/login.view.php';    

?>