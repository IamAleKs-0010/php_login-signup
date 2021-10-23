<?php

    require 'db.php';
    require_once 'autoload.php';

    check_session();

    $error = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = escEmail($_POST['email']);

        if(empty($email)){
            $error .= '<li>' . FIELDS_MISSING . '</li>';

        } else{

            if(empty($error)){
                $query = 'SELECT email FROM users WHERE email = :email LIMIT 1';
                $stmt = $conn -> prepare($query);
                $stmt -> execute( array(':email' => $email));

                $check = $stmt -> fetch();

                if($check != true){
                    $error .= '<li>' . MAIL_DOES_NOT_EXIST .'</li>';
                } else{

                    unset($query);

                    $token = random_bytes(5);
                    require 'mail.php';

                    $query = 'INSERT INTO passwords (email, token, code) VALUES (:email, :token, :code)';
                    $stmt = $conn -> prepare($query);
                    $stmt -> execute(array(':email' => $email, ':token' => $token, ':code' => $code));
            
                    // header('Location: forget_otp.php');
                    // die();
                }
            }
        }
    }

?>