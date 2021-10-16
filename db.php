<?php

    require 'autoload.php';

    try{
        $host_dbname = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
        $conn = new PDO($host_dbname, DB_USERNAME, DB_PASSWORD);

    } catch(PDOException $e){
        header('Location: error.html');
        die();
    }
    
?>