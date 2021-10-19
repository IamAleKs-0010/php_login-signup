<?php

    require 'db.php';
    require_once 'autoload.php';

    if(!$conn){
        require 'view/error.html';
    } else{
        header('Location: index.php');
    }

?>