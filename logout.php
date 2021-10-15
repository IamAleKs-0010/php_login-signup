<?php

    require 'autoload.php';

    session_destroy();

    $_SESSION = array();

    header('Location: login.php');

    die();

?>