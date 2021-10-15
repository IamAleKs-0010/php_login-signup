<?php

    function check_session(){
        if(isset($_SESSION['user'])){
            header('Location: index.php');
        }
    }

    function esc($field){
        return trim(filter_var(stripslashes($field), FILTER_SANITIZE_STRING)); 
    }

    function escEmail($field){
        return trim(filter_var(strtolower($field), FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL));
    }

?>