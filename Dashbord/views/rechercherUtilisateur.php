<?php
	include '../Controller/UtilisateurC.php';
	include_once '../Model/Utilisateur.php';

    if (isset($_REQUEST['rechercher_utilisateur']))
    {
        if (isset($_POST["username"]) && (!empty($_POST["username"])))
        {
            $utilisateurC = new UtilisateurC();
            if (isset($_POST['username'])){
                $username = $_POST['username'] ;
                $utilisateur = $utilisateurC->rechercher_Utilisateur($username);
                $listeU = $utilisateurC->rechercher_UtilisateurID($username);

                $id_user = $utilisateur['id_user'] ; 
                $nom_user = $utilisateur['nom_user'] ; 
                $prenom_user = $utilisateur['prenom_user'] ; 
                $email_user = $utilisateur['email_user'] ; 
                $tel_user = $utilisateur['tel_user'] ;  
                $adresse_user = $utilisateur['adresse_user'] ; 
                $username = $utilisateur['username'] ; 
                $password_user = $utilisateur['password_user'] ; 
                $role_user = $utilisateur['role_user'] ;  

            }
        }
    }			
?>
