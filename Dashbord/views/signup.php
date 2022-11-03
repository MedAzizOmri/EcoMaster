<?php
	session_start();
	include_once '../config.php' ; 
	include 'ajouterUtilisateur.php' ;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<title>Register Form</title>
</head>
<body>
	<div class="container">
		<form action="captchaa.php" method="POST" class="login-email" id="myForm">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" id="Username"  required>
			</div>
			<span id="error"></span>
			<div class="input-group">
				<input type="text" placeholder="Nom" name="nom_user"  required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Prenom" name="prenom_user"  required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email_user"  required>
			</div>
			<div class="input-group">
				<input type="number" placeholder="telephone" name="tel_user"  required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="adresse" name="adresse_user"  required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password_user"  required>
            </div>
			<td><label class="labels">Rôle : </label></td>
				<td>
					<select class="input" id="role_user" name = "role_user" style="width: 170px;">
						<option value="Administrateur">Administrateur</option>
						<option value="client">client</option>
					
					</select>
				</td>
				<div class="g-recaptcha" data-sitekey="6LdiBG4dAAAAAF_4eOT9DHJMrGYhXFYKaxEAAO5Y"></div>
			<div class="input-group">
				<button type="submit" name="signup" value="Créer un compte" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="pdo_login.php">Login Here</a>.</p>
			
		</form>
	</div>
	<script>
     let myForm =document.getElementById('myForm');
	 
	 myForm.addEventListener('submit', function(e){
		let myInput =document.getElementById('Username');
		let myRegex= /^[a-zA-Z-\s]+$/;
		if(myInput.value.trim() == ""){
			let myError=document.getElementById('error');
			myError.innerHTML="le champs username est requis.";
			myError.style.color ='red';
			e.preventDefault();
			
		}else if (myRegex.test(myInput.value)==false){
			let myError=document.getElementById('error');
			myError.innerHTML="le champs username n'est pas requis.";
			myError.style.color ='red';
			e.preventDefault();

		}

	 }); 
     

	</script>
</body>
</html>