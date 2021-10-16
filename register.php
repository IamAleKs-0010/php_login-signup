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


     // ? Preguntamos si el username posee espacios en blanco
        if(preg_match('/\s/', $user)){
            $error .= '<li>' . USER_REGISTRATION_FAIL .'</li>';

        } else{
            // ? Preguntamos si el username posee caracteres especiales
            if(!preg_match('/(?!.*[\.\-\_])^[a-zA-Z0-9\.\-\_]+$/', $user)){
                $error .= '<li>' . SYMBOLS_NOT_ALLOWED . '</li>';

            } else{
                // ? Preguntamos si el username está entre 3 y 16 dígitos
                $validateUser = strlen($user);
                if($validateUser > 16 || $validateUser <3){
                    $error .= '<li>' . INCORRECT_USER . '</li>'; 

                } else{
                    // ? Preguntamos si el email cumple con la estructura de un correo
                    if(!preg_match('/^[\w\-]+@[\w\-]+.[\w\-]+$/', $email)){
                        $error .= '<li>' . INVALID_EMAIL  . '</li>';
        
                    }
                }
            }
        } 

     // ? Preguntamos si algún campo está vacio
        if(empty($user) || empty($email) || empty($password) || empty($cpassword)){
            $error .= '<li>' . FIELDS_MISSING . '</li>';
        } else{

            $query = 'SELECT user email FROM `users` WHERE user = :user OR email = :email LIMIT 1';
            $stmt = $conn -> prepare($query);
            $stmt -> execute (array(':user' => $user,
                                    ':email' => $email)); 

            $check = $stmt -> fetch();

            
            if(empty($error)){
                // ? Preguntamos si ya existe un usuario con mismo username o email en DB
                if($check != false){
                    $error .= '<li>' . USER_AND_EMAIL_ALREADY_EXISTS . '</li>';
                } else{
                    // ? Preguntamos si la contraseña es mayor a 8 caracteres        
                    $validatePass = strlen($password);
                    $validateCPass = strlen($cpassword);

                    if($validatePass < 8 && $validateCPass < 8){
                        $error .= '<li>' . SHORT_PASSWORD . '</li>';
                    } else{
                        // ? Preguntamos si la contraseña tiene caracteres especiales     
                        if(!preg_match('/^[A-Za-z\d?)?(?-?_?]+$/', $password)){
                            $error .= '<li>' . SYMBOLS_NOT_ALLOWED_PASS .'</li>';
                        } else{
                            // ? Hasheamos contraseñas    
                            $password = hash('sha512', $password);
                            $cpassword = hash('sha512', $cpassword);

                            if($password != $cpassword){
                                $error .= '<li>' . PASSWORD_NOT_MATCH . '</li>';

                            } else{
                                // ? Preguntamos si ambas contraseñas coinciden   
                                if($password != $cpassword){
                                    $error .= '<li>' . PASSWORD_NOT_MATCH . '</li>';
                                }
                            }
                        } 
                    }
                }
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