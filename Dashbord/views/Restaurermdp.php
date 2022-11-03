<?php 
    include_once "../controller/UtilisateurC.php";
	include_once '../Model/Utilisateur.php';

    if (isset($_POST["code_verification"]) && !empty($_POST["code_verification"])){
        $code_verification = $_POST['code_verification'];
        $codemsg = $_POST['codemsg'];
        if ($code_verification == $codemsg){
            $utilisateurC = new UtilisateurC();

            $username = $_POST['username_2'];
            $password_user = $_POST['password_user_2'];

            $utilisateur = $utilisateurC->rechercher_UtilisateurUsername($username);

            $id_user = $utilisateur['id_user'] ; 
            $nom_user = $utilisateur['nom_user'] ; 
            $prenom_user = $utilisateur['prenom_user'] ; 
            $email_user = $utilisateur['email_user'] ; 
            $tel_user = $utilisateur['tel_user'] ;  
            $adresse_user = $utilisateur['adresse_user'] ; 
            $role_user = $utilisateur['role_user'] ;  

            $utilisateur = new Utilisateur($nom_user,
                                        $prenom_user,
                                        $email_user,
                                        $tel_user,
                                        $adresse_user,
                                        $username,
                                        $password_user,
                                        $role_user
            );
            $utilisateurC->modifier_Utilisateur($utilisateur, $id_user);
            }else
                echo "Ce n'est pas le bon code de vérification !";
    }
    header('Location: pdo_login.php');
?>
