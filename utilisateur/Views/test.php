<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form</title>

<style type="text/css">
	 	.labels {
	 		font-size: 15px ; 
	 		color : black ;
	 		font-weight : bold;
	 	}
	 </style>

</head>
<body>
	<!--  Sign Up form   -->
	
	<center>
	<table>
<div class="container">
<form action="" method="POST" class="login-email" id="myForm">
			<tr>
				<h1 class="login-text" style="font-size: 2rem; font-weight: 800;">Inscription</h1>
				
			</tr>
			<tr class="input-group">
				<td><label >Username : </label></td>
				<td><input type="text" placeholder="Username" name="username" id="Username"></td>
			</tr>
			
			<tr class="input-group">
				<td><label class="labels">Nom : </label></td>
				<td><input type="text" name="nom_user"></td>
			</tr>

			<tr class="input-group">
				<td><label class="labels">Prénom : </label></td>
				<td><input type="text" name="prenom_user"></td>
			</tr>

			<tr class="input-group">
				<td><label class="labels">Email : </label></td>
				<td><input type="text" name="email_user"></td>
			</tr>
			
			<tr class="input-group">
				<td><label class="labels">Téléphone : </label></td>
				<td><input type="number" name="tel_user"></td>
			</tr>
			 
			<tr class="input-group">
				<td><label class="labels">Adresse : </label></td>
				<td><input type="text" name="adresse_user"></td>
			</tr>

			<tr class="input-group">
				<td><label class="labels">Mot de passe : </label></td>
				<td><input type="password" name="password_user"></td>
			</tr>

			<tr>
				<td><label class="labels">Rôle : </label></td>
				<td>
					<select class="input" id="role_user" name = "role_user" style="width: 170px;">
						<option value="Administrateur">Administrateur</option>
						<option value="Etudiant">Etudiant</option>
						<option value="Enseignant">Enseignant</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td><input type="submit" name="signup" value="Créer un compte"></td>
				<td class="labels">Déjà Membre ? <a href="login.php"> Connectez-vous ici.</a></td>
			</tr>
			<?php	
				include_once '../config.php' ; 
				include 'ajouterUtilisateur.php' ;
			?>
		</form>	
</div>
	</table>
	</center>
</body>
</html>