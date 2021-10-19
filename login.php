<?php

    require 'db.php';
    require_once 'autoload.php';

    check_session();

    $error = '';
    $submit = false;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = filter_var(esc($_POST['user']), FILTER_SANITIZE_STRING);
        $password = esc($_POST['password']);
        $password = md5($password);

        if(empty($user) || empty($password)){
            $error .= '<li>' . FIELDS_MISSING . '</li>';
        } else{
            if(empty($error)){

                $query = 'SELECT user pass FROM users WHERE user = :user AND pass = :password LIMIT 1';
                $stmt = $conn -> prepare($query);
                $stmt -> execute(array(
                                       ':user' => $user,
                                       ':password' => $password
                                      ));
                
                $check = $stmt -> fetch();

                if($check != false){
                    $_SESSION['user'] = $user;
                    header('Location: content.php');
                    die();
                    $submit = true;
                } else{
                    $error .= '<li>' . LOGIN_FAIL . '</li>';
                }
            }
        }
    }

    require 'view/login.view.php';    

?>