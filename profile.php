<?php 
    require_once("bootstrap.php");
   
    //$userName = $_SESSION['UserName'];
    if( isset($_SESSION['User']) ){
        //logged in user
        //echo "😎";
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php require_once("nav.inc.php"); ?>
    </header>
    <section>
        <?php require_once("icons.inc.php"); ?>
        <div class="wrapper">
        <div class="profile__pic box">
            <div class="profile__pic--center"><img src="images/boy.png" alt="Jhon Doe"></div>
            <input type="file">
        </div>
        <div class="form box">
        <div>
            <label for="fullname">Fullname</label><br>
            <input type="text" name="fullname" id="fullname" value="JhoncDoe">
        </div>
        <div>
            <label for="email">E-mail</label><br>
            <input type="text" name="email" id="email" value="jhon.doe@hotmail.com">
        </div>
        <div>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" value="djsfhqklsjdfhkjldsqnkjvqnsdkj">
        </div>
        <div>
            <label for="description">Description</label><br>
            <textarea name="description" id="description" cols="30" rows="10">Ik ben Jhon en ben alleenstaande vader met  kinderen</textarea>
        </div>
        <input type="submit" value="update">
        </div>
        </div>
    </section>
</body>
</html>