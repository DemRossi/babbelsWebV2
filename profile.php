<?php 
    require_once("bootstrap.php");
   
    //$userName = $_SESSION['UserName'];
    if( isset($_SESSION['User']) ){
        //logged in user
        echo "😎";
    }else{
        //no logged in user
        echo "nope";
        //header('Location: login.php');
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profiel</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/app.min.css">
</head>
<body>
    <header>
        <?php require_once("nav.inc.php"); ?>
    </header>
    <section>
        <div></div>
    </section>
</body>
</html>