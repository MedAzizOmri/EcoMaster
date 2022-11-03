<?php
    include_once '../Model/Utilisateur.php';
    include_once '../Controller/UtilisateurC.php';

    if (isset($_REQUEST['ajouter_utilisateur']))
    {
        $utilisateurC = new UtilisateurC();

        if (
            isset($_POST["nom_user"]) &&
            isset($_POST["prenom_user"]) && 
            isset($_POST["email_user"]) && 
            isset($_POST["tel_user"]) && 
            isset($_POST["adresse_user"]) &&
            isset($_POST["username"]) && 
            isset($_POST["password_user"]) && 
            isset($_POST["role_user"]) 
        ) {

            if (
                !empty($_POST["nom_user"]) && 
                !empty($_POST["prenom_user"]) && 
                !empty($_POST["email_user"]) && 
                !empty($_POST["tel_user"]) && 
                !empty($_POST["adresse_user"]) && 
                !empty($_POST["username"]) && 
                !empty($_POST["password_user"]) && 
                !empty($_POST["role_user"])
            ){
                $nom_user = $_POST['nom_user'] ; 
                $prenom_user = $_POST['prenom_user'] ; 
                $email_user = $_POST['email_user'] ; 
                $tel_user = $_POST['tel_user'] ;  
                $adresse_user = $_POST['adresse_user'] ; 
                $username = $_POST['username'] ; 
                $password_user = $_POST['password_user'] ; 
                $role_user = $_POST['role_user'] ;  

                $utilisateur = new Utilisateur($nom_user,
                                $prenom_user,
                                $email_user,
                                $tel_user,
                                $adresse_user,
                                $username,
                                $password_user,
                                $role_user
                );
                
                $utilisateurC->ajouter_Utilisateur($utilisateur);
            }
                
            else
                $error = "Missing information";
        }
    }else if (isset($_REQUEST['signup']))
    {
        $utilisateurC = new UtilisateurC();

        $nom_user = $_POST['nom_user'] ; 
        $prenom_user = $_POST['prenom_user'] ; 
        $email_user = $_POST['email_user'] ; 
        $tel_user = $_POST['tel_user'] ;  
        $adresse_user = $_POST['adresse_user'] ; 
        $username = $_POST['username'] ; 
        $password_user = $_POST['password_user'] ; 
        $role_user = $_POST['role_user'] ;  

        $utilisateur = new Utilisateur($nom_user,
                        $prenom_user,
                        $email_user,
                        $tel_user,
                        $adresse_user,
                        $username,
                        $password_user,
                        $role_user
        );
        
        $utilisateurC->ajouter_Utilisateur($utilisateur);
        header('Location: pdo_login.php');

    }
?>