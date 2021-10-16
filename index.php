<?php

    require 'autoload.php';

    if(isset($_SESSION['user'])){
        header('Location: content.php');
    } else{
        header('Location: register.php');
    }

?>