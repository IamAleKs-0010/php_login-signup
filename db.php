<?php

    require 'autoload.php';

    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($conn -> connect_error){
        die('Error: ' . $conn -> connect_error);
    }

?>