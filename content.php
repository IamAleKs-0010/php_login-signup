<?php

    require 'autoload.php';

    if(isset($_SESSION['user'])){
        require 'view/content.view.php';
    } else{
        header('Location: register.php');
    }

?>