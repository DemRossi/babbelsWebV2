<?php 
    require_once("bootstrap.php");
   
    //$userName = $_SESSION['UserName'];
    if( isset($_SESSION['User']) ){
        //logged in user
        echo "😎";
    }else{
        //no logged in user
        header('Location: login.php');
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Babbels - Home</title>
    <link rel="stylesheet" href="dist/css/app.min.css">
</head>
<body>
    <header>
        <?php require_once("nav.inc.php"); ?>
    </header>
    

</body>
</html>