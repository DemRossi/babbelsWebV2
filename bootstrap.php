<?php
    //start a new session for each user
    session_start();

    spl_autoload_register(function($class){
        require_once(__DIR__ . DIRECTORY_SEPARATOR . "classes" . DIRECTORY_SEPARATOR . $class . ".class.php");
    });


?>