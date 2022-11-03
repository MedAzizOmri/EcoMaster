<?php
	$id_user = "";
	$nom_user = "" ;
	$prenom_user = ""; 
	$email_user = "";
	$tel_user = "";
	$adresse_user = "" ;
	$username = "" ;
	$password_user = "" ;
	$role_user = "" ;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Utilisateurs</title>
	<style>
		/*.table {
			border:1px solid black;
			border-collapse:collapse;
			color : black ;
			font-weight: bold ;
			text-align: center ;   
			width : 130px;
		}*/
		table {
border: medium solid #6495ed;
border-collapse: collapse;
width: 50%;
}
th {
font-family: monospace;
border: thin solid #6495ed;
width: 50%;
padding: 5px;
background-color: #D0E3FA;
background-image: url(sky.jpg);
}
td {
font-family: sans-serif;
border: thin solid #6495ed;
width: 50%;
padding: 5px;
text-align: center;
background-color: #ffffff;
}
caption {
font-family: sans-serif;
}
		.bouton {
			border:1px solid blue;
			border-collapse:collapse;
			color : green ;
			font-weight: bold ;
			text-align: center ;   
			width : 170px;
			height : 30px ;
		}
		.button {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}
		.button:hover {
  background-color: #008CBA;
  color: white;
}

		
		.input {
			border:1px solid black;
			border-collapse:collapse;
			color : black ;
			width : 160px;
			height : 26px ;
		}
	</style>
</head>
<body>
<center><h2>CRUD Partie admin : </h2></center>

	<?php
	// ================= Rechercher Un Utilisateur ==================================
		include '../config.php' ; 
		include 'rechercherUtilisateur.php' ;

	// ==================== REINITIALISER ==========================
		if (isset($_REQUEST['reinitialiser']))
		{
			$id_user = "";
			$nom_user = "" ;
			$prenom_user = ""; 
			$email_user = "";
			$tel_user = "";
			$adresse_user = "" ;
			$username = "" ;
			$password_user = "" ;
			$role_user = "" ;
		}
	?>

	<table>
		<td>
			<form action="" method="POST">
			<table>
			<!-- =================== ATTRIBUTS & BOUTONS =================== -->
				<tr>
					<th>ID : </th>
					<th><input class = "input" type="text" name="id_user" value="<?php echo $id_user ; ?>"></th>
				</tr>
				<!-- <tr>
					<th>Nom  : </td>
					<th><input class = "input" type="text" name="nom_user" value="<?php echo $nom_user ; ?>"></th>
				</tr>
				<tr>
					<th>Prénom : </td>
					<th><input class = "input" type="text" name="prenom_user" value="<?php echo $prenom_user ; ?>"></th>
				</tr>
				<tr>
					<th>Email : </th>
					<th><input class = "input" type="text" name="email_user" value="<?php echo $email_user ; ?>"></th>
				</tr>
				<tr>
					<th>Téléphone : </th>
					<th><input class = "input" type="number" name="tel_user" value="<?php echo $tel_user ; ?>"></th>
				</tr>
				<tr>
					<th>Adresse : </th>
					<th><input class = "input" type="text" name="adresse_user" value="<?php echo $adresse_user ; ?>"></th>
				</tr> -->
				<tr>
					<th>Username : </th>
					<th><input class = "input" type="text" name="username" value="<?php echo $username ; ?>"></th>
				</tr>
				<!-- <tr>
					<th>Mot de passe : </th>
					<th><input class = "input" type="password" name="password_user" value="<?php echo $password_user ; ?>"></th>
				</tr>
				<tr>
					<th>Rôle : </th>
					<th>
						<select style="width: 167px;" class="input" id="role_user" name = "role_user">
								<option <?=$role_user=='Administrateur'?'selected="selected"':'';?> value="Administrateur">Administrateur</option>
								<option <?=$role_user=='client'?'selected="selected"':'';?> value="client">client</option>
								
						</select>
					</th>
				</tr> -->
				</table>

			<table>
				<br>
				<tr>
					<th>
						<select value="sortselect" name="sortselect" style="width: 117px; height: 30px;">
							<option value="tri_id">ID</option>
							<option value="tri_nom" >Nom</option>
							<option value="tri_username" >Username</option>
						</select>
						<input type="submit" style="height : 30px; width:45px;" name="trier_utilisateurs" value="Trier">
					</th>
				</tr>
				<tr>
					
					<th><input class = "bouton" type="submit" name="modifier_utilisateur" value="Modifier Utilisateur"></th>
					<th><input class = "bouton" type="submit" name="supprimer_utilisateur" value="Supprimer Utilisateur"></th>
					<th><input class = "bouton" type="submit" name="rechercher_utilisateur" value="Rechercher Utilisateur"></th>
					<th><input class = "bouton"type="submit" name="reinitialiser" value="Réinitialiser" ></th>
				</tr>
				<?php	
					include_once '../config.php' ; 
					include 'ajouterUtilisateur.php' ;
					
					include 'supprimerUtilisateur.php' ;
					include 'afficherUtilisateur.php' ;		
				?>
			</table>
			</form>
		</td>
	</table>

</body>
</html>