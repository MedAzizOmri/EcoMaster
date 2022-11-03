<?php 
    include_once "../controller/UtilisateurC.php";
	include_once '../Model/Utilisateur.php';

    $username = ""; 
    $password_user =""; 
    $verifpassword_user = ""; 

	$code_verification = "";
	$codemsg = "";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleresetpass.css">
	<link rel="stylesheet" href="style.css">


	<title>Restaurer Mot de passe</title>
</head>
<body>
	<center>
		<form action="" method="POST" style="border-radius: 30px; border: 1px solid black;width: 27%;opacity:70%;padding-bottom: 30px;padding-top: 20px; background-color:white;">
			<label>Username</label>
			<br>
			<input type="text" name="username" value = <?php echo $username ?>>
			<br><br>
			<label>Nouveau mot de passe</label>
			<br>
			<input type="password" name="password_user" value = <?php echo $password_user ?>> 
			<br><br>
            <label>Confirmer mot de passe</label>
            <input type="password" name="verifpassword_user" value = <?php echo $verifpassword_user ?>> 
			<br><br>
			<input type="submit" name="restaurer" value="Restaurer">
		<!-- </form>	 -->
	<!-- </center> -->
    <br><br>
	
    <?php 
		if (isset($_POST['restaurer']))
		{
			if (
				isset($_POST["username"])&&
				isset($_POST["password_user"]) && 
				isset($_POST["verifpassword_user"]) 
			) {
				if (
					!empty($_POST["username"]) && 
					!empty($_POST["password_user"]) && 
					!empty($_POST["verifpassword_user"]) 
				){
					$password_user = $_POST['password_user']; 
					$verifpassword_user = $_POST['verifpassword_user'];
					if ($password_user == $verifpassword_user)
					{
						$utilisateurC = new UtilisateurC();
						$username = $_POST['username'];
						$utilisateur = $utilisateurC->rechercher_UtilisateurUsername($username);
	
						$id_user = $utilisateur['id_user'] ; 
						$nom_user = $utilisateur['nom_user'] ; 
						$prenom_user = $utilisateur['prenom_user'] ; 
						$email_user = $utilisateur['email_user'] ; 
						$tel_user = $utilisateur['tel_user'] ;  
						$adresse_user = $utilisateur['adresse_user'] ; 
						$role_user = $utilisateur['role_user'] ;  
	
						// Code de vérification à envoyer par mail 
						$codemsg = "";
						for ($i = 0; $i<9; $i++){
							if($i == 3 || $i == 6)
								$codemsg = $codemsg.' ' ;
							$codemsg = $codemsg.chr(rand(65,90));
						}
	
						// Partie Mailing 
						$headers = 'From: rayenmediouni172@gmail.com' . "\r\n" . 
									'MIME-Version: 1.0' . "\r\n" .
									'Content-Type: text/html; charset=utf-8';
	
						$message = "Bonjour " .$username .",<br><br> Voici le code de vérification que vous
									devrez saisir pour changer le mot de passe de votre compte : " .$codemsg ."<br><br> Cordialement.";
	
						$result = mail($email_user, 
										"Restauration Mot de passe", 
										$message, 
										$headers);

						// HTML CODE DE VERIFICATION  
						?>
						<label>Code de vérification </label>
						<br>
						<input type="text" name="code_verification" value=<?php echo $code_verification ?> >
						<input type="hidden" name="codemsg" value="<?php echo $codemsg ?>">
						<input type="hidden" name="username_2" value="<?php echo $username ?>">
						<input type="hidden" name="password_user_2" value="<?php echo $password_user ?>">
						<br><br>
						<input type="submit" name="valider" value="Valider" formaction="Restaurermdp.php">
						</center>
						<?php
					}else 
						echo "Les mots de passes sont différents !";
				} 
			}
		}
	?>
	</form>
</body>
</html>