<?php

    require 'autoload.php';

    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    try{
        $host_dbname = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
        $conn = new PDO($host_dbname, DB_USERNAME, DB_PASSWORD);

    } catch(PDOException $e){
        die('No se pudo conectar con la base de datos: ' . $e -> getMessage());
    }
    
?>