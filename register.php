<?php

    require 'db.php';
    require_once 'autoload.php';

    check_session();
    
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

            $query = 'SELECT user email FROM `users` WHERE user = :user OR email = :email LIMIT 1';
            $stmt = $conn -> prepare($query);
            $stmt -> execute (array(':user' => $user,
                                    ':email' => $email)); 

            $check = $stmt -> fetch();

            if($check != false){
                $error .= '<li>' . USER_AND_EMAIL_ALREADY_EXISTS . '</li>';
            }  

            $password = hash('sha512', $password);
            $cpassword = hash('sha512', $cpassword);

            if($password != $cpassword){
                $error .= '<li>' . PASSWORD_NOT_MATCH . '</li>';
            }

            if(empty($error)){

                $query = 'INSERT INTO users (user, email, pass, date) VALUES (:user, :email, :password, :reg_date)';
                $stmt = $conn -> prepare($query);
                $stmt -> execute(array(
                                       ':user' => $user,
                                       ':email' => $email,
                                       ':password' => $password,
                                       ':reg_date' => $reg_date
                                      )
                );

                header('Location: login.php');
                die();
            }
        }
    }

    require 'view/register.view.php';

?>