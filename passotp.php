<?php

    require 'db.php';
    require_once 'autoload.php';

    check_session();

    if(isset($_GET['email']) && isset($_GET['token'])){
        $email = $_GET['email'];
        $hiddenEmail = emailAsterisk($email);
        $token = $_GET['token'];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $code = $_POST['code']; // Get all the name="code[]"
            $codes = []; // Empty Array
            array_push($codes, $code); // Add all the codes to the array '$codes'
            $recoveryCode = $codes[0][0] . $codes[0][1] . $codes[0][2] . $codes[0][3];

        }
    } else{
        header('Location: login.php');
    }

?>