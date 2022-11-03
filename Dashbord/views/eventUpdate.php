<?php
	include '../controller/eventc.php';
  include_once '../model/event.php';


	$eventc = new eventc();
	$error = "";
	
	if (
		isset($_POST["nom"]) &&
        isset($_POST["prix_dt"]) &&
        isset($_POST["date"]) &&
        isset($_POST["localisation"])
       
	){
		if (
            !empty($_POST["nom"]) &&
            !empty($_POST["prix_dt"]) &&
            !empty($_POST["date"]) &&
            !empty($_POST["localisation"]) 
            
        ) {
            $event = new event(
                $_POST['nom'],
                $_POST['prix_dt'],
                $_POST['date'],
                $_POST['localisation']
               
			);
			
            $actualiteC->modifierevent($event, $_GET['id_eve']);
            header('Location:../views/eventView.php');
        }
        else
        $error = "Missing information";
	}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        
        <!-- My Css Classes-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/ayed.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> 
                
        <!-- java -->
        <script type="text/javascript" src="../js/actualite.js"></script>
    </head>
    <body class="sb-nav-fixed">
            <!-- header-->
                  <?php include_once 'header.php'; ?>
            <!-- Contient -->
            <div id="layoutSidenav_content">
                <div id="layoutSidenav_content">
                    <div class="testbox">
                    <?php 
			if (isset($_GET['id_eve'])){
				// $Actualite = $actualiteC->recpererActualite($_GET['IdActualite']);
				
		?>
                        <form action="" method="POST">
                          <br>
                          <h1>News Form</h1>
                          <p></p>
                          <h4>Titre Actualite</h4>
                          <div >
                            <input type="text" name="TitreActualite" id="TitreActualite" placeholder="exemple: Exposer inatendue"value = " " required/>
                          </div>
                          <h4>Date Actualite<span>*</span></h4>
                          
                          <div class="date">
                            <input type="date" name="DateActualite" id="DateActualite" max="12-31-3333"required/>
                            <i class="fas fa-calendar-alt"></i>
                          </div>
                          <h4>Description Actualite</h4>
                          <textarea rows="5" id="DescriptionActualite" name="DescriptionActualite" required></textarea>
                          <h4>Select image to upload:</h4>
                          <input type="file" name="ImageActualite" id="ImageActualite">
                          <div class="btn-block">
                            <button type="submit" name="submit" value="submit"  onclick="return okEvent();" >Update</button>
                          </div>
                          
                        </form>
                        <?php
		}
		?>
                      </div>
            <!-- footer -->
            <?php include_once 'footer.php'; ?>   
    </body>
</html>
