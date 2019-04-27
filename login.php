<?php
//require_once("classes/Db.class.php");
require_once("bootstrap.php");

if(!empty($_POST)){
    $conn = Db::getInstance();
    $username = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    $statement = $conn->prepare("select * from users where email = :username");
    $statement->bindParam(":username", $username);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    

	if(password_verify($password, $user['password'])){
        //setcookie("loggedin", $user['password'], time() +60*60*24*30);
        session_start();
        $_SESSION['User'] = true;
        $_SESSION['Id'] = $user['id'];
        header('Location: index.php');
	} else{
        $errorLogin = true;
    }
}

?><!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="dist/css/login.css">
</head>
<body>
	<div class="form-modal">

		<div class="form-toggle">
			<button id="login-toggle">Aanmelden</button>
			<button id="signup-toggle" onclick="toggleSignup()">Registreren</button>
		</div>

		<div id="login-form">
			<form action method="post">
				<div class="input-container">
					<input type="email" id="email" name="email" autofocus required/>
					<label for="email">Email adres</label>
				</div>
				<div class="input-container">
					<input type="password" id="password" name="password" autofocus required/>
					<label for="password">Wachtwoord</label>
				</div>
				<div class="clearfix extra-settings">
					<div class="checkbox">
						<input type="checkbox" name="remember" id="remember">
						<label for="remember">
							Herinner mij
						</label>
					</div>
					<p><a href="javascript:void(0)">Wachtwoord vergeten</a></p>
				</div>
				<button name="login" class="btn login">Aanmelden</button>
				<div class="or-container">
					<span class="or">Of meld aan met:</span>
					<hr/>
				</div>
				<div class="clearfix">
					<button type="button" class="btn login-option"> <i class="fab fa-facebook-f"></i> Facebook</button>
					<button type="button" class="btn login-option"> <i class="fab fa-instagram"></i></i></i> Google</button>
				</div>
			</form>
		</div>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/login.js"></script>

</body>
</html>