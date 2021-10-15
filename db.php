<?php

    require 'autoload.php';

    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if(!$conn){
        echo 'Error: ' . mysqli_connect_error() . PHP_EOL;
    }
    
?>