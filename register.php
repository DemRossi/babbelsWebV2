<?php
//require_once("classes/User.class.php");
require_once("bootstrap.php");

if(!empty($_POST)){
	$user = new User();
	$user->setEmail($_POST['email']);
	$user->setFirstname($_POST['firstname']);
	$user->setLastname($_POST['lastname']);
	$user->setUsername($_POST['username']);
	$user->setPassword($_POST['password']);
	$user->setPasswordConfirmation($_POST['password_confirmation']);

	if( $user->register() ){
		session_start();
		$_SESSION['User'] = true;
		header('Location: index.php');
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
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-firestore.js"></script>
</head>
<body>


	<div class="form-modal">

		<div class="form-toggle">
			<button id="login-toggle" onclick="toggleLogin()">Aanmelden</button>
			<button id="signup-toggle">Registreren</button>
		</div>

		<div id="signup-form">
			<form action method="post">
				<div class="input-container small">
					<input type="text" id="firstname" name="firstname" autofocus required/>
					<label for="firstname">Voornaam</label>
				</div>
				<div class="input-container small">
					<input type="text" id="lastname" name="lastname" autofocus required/>
					<label for="lastname">Achternaam</label>
				</div>
				<div class="input-container">
					<input type="email" id="email-register" name="email" autofocus required/>
					<label for="email-register">Email adres</label>
				</div>
				<div class="input-container">
					<input type="password" id="password-register" name="password" autofocus required/>
					<label for="password-register">Wachtwoord</label>
				</div>
				<div class="input-container">
					<input type="password" id="passwordConfirm" name="confirmPassword" autofocus required/>
					<label for="passwordConfirm">Herhaal wachtwoord</label>
				</div>
				<button name="register" class="btn login" id="btn">Registreren</button>
				<div class="or-container">
					<span class="or">Of registeer met:</span>
					<hr/>
				</div>
				<div class="clearfix">
					<button type="button" class="btn login-option"> <i class="fab fa-facebook-f"></i>Facebook</button>
					<button type="button" class="btn login-option"> <i class="fab fa-instagram"></i></i></i>Instagram</button>
				</div>
			</form>
		</div>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-firestore.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
	<script src="dist/js/main.js"></script>
	
	<script>
		
		  
		$('#btn').on("click", ()=>{
			let firstName = $('#firstname').val();
			let lastName = $('#lastname').val();
			let email = $('#email-register').val();
			let password = $('#password-register').val();
			//console.log(firstName + " " + lastName + " " + email + " " + password);

			db.collection("Users").add({
				
				firstname: "Alan",
				lastname: "Turing",
				email: "test@test.com",
				timestamp: new Date().getTime()
			})
			.then(function(docRef) {
				console.log("Document written with ID: ", docRef.id);
			})
			.catch(function(error) {
				console.error("Error adding document: ", error);
			});
		});
	</script>
</body>
</html>