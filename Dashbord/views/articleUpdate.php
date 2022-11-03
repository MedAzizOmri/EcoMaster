<?php
	include '../controller/articlec.php';
  include_once '../model/article.php';


	$articlec = new articlec();
	$error = "";
	
	if (
		isset($_POST["subject"]) &&
        isset($_POST["datepub"]) &&
        isset($_POST["writer"]) &&
        isset($_POST["contenu"])
       
	){
		if (
            !empty($_POST["subject"]) &&
            !empty($_POST["datepub"]) &&
            !empty($_POST["writer"]) &&
            !empty($_POST["contenu"]) 
            
        ) {
            $articlec = new articlec(
                $_POST['subject'],
                $_POST['datepub'],
                $_POST['writer'],
                $_POST['contenu']
               
			);
			
            $articlec->modifierarticle($articlec, $_GET['id']);
            header('Location:../views/articleView.php');
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
        <script type="text/javascript" src="../js/articlec.js"></script>
    </head>
    <body class="sb-nav-fixed">
            <!-- header-->
                  <?php include_once 'header.php'; ?>
            <!-- Contient -->
            <div id="layoutSidenav_content">
                <div id="layoutSidenav_content">
                    <div class="testbox">
                    <?php 
			if (isset($_GET['id'])){
				 $articlec = $articlec->recpererarticlec($_GET['id']);
				
		?>
                        <form action="" method="POST">
                          <br>
                          <h1>update article</h1>
                          <p></p>
                          <h4>subject articlec</h4>
                          <div >
                            <input type="text" name="subject" id="subject" placeholder="exemple: Exposer inatendue"value = " <?php echo $articlec ['subject']?>" required/>
                          </div>
                          <h4>Date articlec<span>*</span></h4>
                          
                          <div class="date">
                            <input type="date" name="datepub" id="datepub" value="<?php echo $articlec ['datepub']?>"  required/>
                            <i class="fas fa-calendar-alt"></i>
                          </div>
                          <h4>writer</h4>
                          <input type="text" name="writer" id="writer" placeholder="writer"value = "<?php echo $articlec ['writer']?> " required/>
                          
                          <h4>contenu</h4>
                          <div >
                          <textarea rows="5" id="contenu" name="contenu" required><?php echo $articlec ['contenu']?></textarea>
                          <!-- <h4>Select image to upload:</h4>
                          <input type="file" name="contenu" id="contenu"> -->
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
