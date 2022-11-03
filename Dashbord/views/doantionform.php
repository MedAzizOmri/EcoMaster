
<?php
    require_once '../controller/donationc.php';
    require_once '../model/donation.php';

    $error = "";
    // create user
    $donation = null;
    // create an instance of the controller
    $donationC = new donationC();
    if (
        isset($_POST["montant"]) &&
        isset($_POST["date"]) &&
        isset($_POST["info_bancaire"]) 
        
    ) {
        if (
            !empty($_POST["montant"]) && 
            !empty($_POST["date"]) &&
            !empty($_POST["info_bancaire"])
            
        ) {
            $donation = new donation(
                $_POST['montant'], 
                $_POST['date'],
                $_POST['info_bancaire']    
            );
            $donationC->ajouterdon($donation);
            mail('Un Ajout au table donation','Une nouvelle entite donation est ajouter il y a quelques secondes ','From: ');
           header('Location:../views/donationView.php');
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
        <script type="text/javascript" src="../js/donation.js"></script>
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
                          <h1>donation</h1>
                          <p></p>
                          <h4>montant</h4>
                          <div >
                            <input type="text" name="montant" id="montant" placeholder="montant" required maxlength = "40"/>
                          </div>
                          <h4>Date donation<span>*</span></h4>
                          <div class="date">
                            <input type="date" name="date" id="date" min="<?php echo date('Y-m-d'); ?>"required/>
                            <i class="fas fa-calendar-alt"></i>
                          </div>
                          <h4>info bancaire</h4>
                          <textarea rows="5" id="info_bancaire" name="info_bancaire" required maxlength = "1400"></textarea>
                          <div class="btn-block">
                            <button type="submit" name="submit" value="submit"  onclick="return okEvent();" >Add</button>
                            
                          </div>
                          
                        </form>
                      </div>
            <!-- footer -->
            <?php include_once 'footer.php'; ?>   
    </body>
</html>
