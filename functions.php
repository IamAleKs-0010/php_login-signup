<?php

    # Existe sesión
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
    function escEmail($data){
        $data = trim($data);
        $data = strtolower($data);
        $data = filter_var($data, FILTER_VALIDATE_EMAIL);
        $data = filter_var($data, FILTER_SANITIZE_EMAIL);
        return $data;
    }

?>