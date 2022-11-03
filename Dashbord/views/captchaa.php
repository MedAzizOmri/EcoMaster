<?php

if (isset($_POST['signup']) && $_POST['g-recaptcha-response'] != "") {
    include "db_config.php";
    $secret = '6LdiBG4dAAAAAE5FgfglAi8zPU3PMiBARFYzOGTV';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
        
        //first validate then insert in db
        $nom_user = $_POST['nom_user'] ; 
        $prenom_user = $_POST['prenom_user'] ; 
        $email_user = $_POST['email_user'] ; 
        $tel_user = $_POST['tel_user'] ;  
        $adresse_user = $_POST['adresse_user'] ; 
        $username = $_POST['username'] ; 
        $password_user = $_POST['password_user'] ; 
        $role_user = $_POST['role_user'] ;  
        mysqli_query($conn, "INSERT INTO utilisateurs(nom_user, prenom_user ,email_user,tel_user,adresse_user,username,password_user,role_user) VALUES('" . $_POST['nom_user'] . "', '" .  $_POST['prenom_user'] . "', '" . $_POST['email_user'] . "', '" .  $_POST['tel_user'] . "', '" . $_POST['adresse_user'] . "', '" . $_POST['username'] . "', '" . $_POST['password_user'] . "', '" . $_POST['role_user'] . "')");
       
       
        echo " <script type='text/javascript'>alert('Your registration has been successfully done!');</script>";
        echo '<script>window.location.replace("pdo_login.php")</script>';
    }

}