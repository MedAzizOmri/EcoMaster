
<?php
    require_once '../controller/eventc.php';
    require_once '../model/event.php';

    $error = "";
    // create user
    $event = null;
    // create an instance of the controller
    $eventc = new eventc();
    if (
        isset($_POST["nom"]) &&
        isset($_POST["date"]) &&
        isset($_POST["prix_dt"]) &&
        isset($_POST["localisation"]) &&
        isset($_POST["description"]) &&
        isset($_POST["description2"])
        
    ) {
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["date"]) &&
            !empty($_POST["prix_dt"]) &&
            !empty($_POST["localisation"]) &&
            !empty($_POST["description"]) &&
            !empty($_POST["description2"])
            
        ) {
            $event = new event(
                $_POST['nom'], 
                $_POST['date'],
                $_POST['prix_dt'],
                $_POST['localisation'],
                $_POST['description'],
                $_POST['description2'] 
            );
            $eventc->ajouterevent($event);
            mail('aziz.omri@esprit.tn','Un Ajout au table event','Une nouvelle entite event est ajouter il y a quelques secondes ','From: aziz.omri@esprit.tn');
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
        <script type="text/javascript" src="../js/event.js"></script>
        <script>
        function Verifier()
        {
          var elts=document.querySelectorAll("input");
          if(elts[0].value!="" && elts[1].value!="" && elts[2].value!="")
          {
            alert ("Ajout avec succes.");
          }
          else
          {
            alert ("Des champs sont vides.")
          }
        }
        </script>

    </head>
    <body class="sb-nav-fixed">
            <!-- header-->
                  <?php include_once 'header.php'; ?>
            <!-- Contient -->
            <div id="layoutSidenav_content">
                <div id="layoutSidenav_content">
                    <div class="testbox">
                        <form action="" method="POST">
                          <br>
                          <br>
                          <h1>Ajouter un nouveau evenement</h1>
                          <p></p>

                          <h4>Nom<span>*</span></h4>
                          <div >
                            <input type="text" name="nom" id="nom" placeholder="" required maxlength = "40"/>
                          </div>

                          <h4>Date<span>*</span></h4>
                          <div class="date">
                            <input type="date" name="date" id="date" min="<?php echo date('Y-m-d'); ?>"required/>
                            <i class="fas fa-calendar-alt"></i>
                          </div>

                          <h4>Prix<span>*</span></h4>
                          <div>
                          <input type="text" name="nom" id="prix_dt" name="prix_dt" placeholder="" required maxlength = "40"/>
                          </div>

                          <h4>Localisation<span>*</span></h4>
                          <input type="text" name="localisation" id="localisation">

                          <h4>Description<span>*</span></h4>
                          <textarea rows="5" id="description" name="description" required maxlength = "1500"></textarea>

                          <h4>Description 2<span>*</span></h4>
                          <textarea rows="5" id="description2" name="description2" required maxlength = "3000"></textarea>

                          <div>
				    	              <label for="inputdefault">Affiche :</label>
					                  <input id="inputdefault" name="affiche" type="file">
					                </div>

                          <div>
				    	              <label for="inputdefault">Pic 1 :</label>
					                  <input id="inputdefault" name="pic1" type="file">
					                </div>

                          <div>
				    	              <label for="inputdefault">Pic 2 :</label>
					                  <input id="inputdefault" name="pic2" type="file">
					                </div>

                          <div>
				    	              <label for="inputdefault">Pic 3 :</label>
					                  <input id="inputdefault" name="pic3" type="file">
					                </div>

                          <div>
				    	              <label for="inputdefault">Pic 4 :</label>
					                  <input id="inputdefault" name="pic4" type="file">
					                </div>


                          <div class="btn-block">
                            <button type="submit" name="submit" value="submit"  onclick="return okEvent();" >Add</button>
                          </div>
                          
                        </form>
                      </div>
            <!-- footer -->
            <?php include_once 'footer.php'; ?>   
    </body>
</html>


