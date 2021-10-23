<?php

    # Session exists
    function check_session(){
        if(isset($_SESSION['user'])){
            header('Location: index.php');
        } 
    }

    # Esc Inputs
    function esc($data){
        $data = trim($data);
        $data = stripslashes($data);
        return $data; 
    }

    # Esc Email
    function escEmail($email){
        $email = trim($email);
        $email = strtolower($email);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return $email;
    }

 # Convert mail to *  // example ' alexander@correo.com '
    function emailAsterisk($email){
        $emailTwoL = mb_substr($email, 0, 2); // al
        $emailDomain = strstr($email, '@'); // @correo.com
        $emailName = strstr($email, '@', true); // alexander 
        $emailWithoutTwoL = substr($emailName, 2, 25); // exander
        $pattern = "/[A-Za-z0-9]/";
        $emailConverted = preg_replace($pattern, '*', $emailWithoutTwoL);

        return $emailTwoL . $emailConverted . $emailDomain;
    }

?>