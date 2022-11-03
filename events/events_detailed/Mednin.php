<?php 
require_once '..\..\Dashbord\controller\eventc.php';
require_once '..\..\Dashbord\model\event.php';
require_once '..\..\Dashbord\configevent.php';

$eventc=new eventc();
$listeevent=$eventc->afficherevent();
if(isset($_POST['submi']))
{
  $listeevent=$eventc->afficherevent();
}
foreach($listeevent as $event)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Janvier 25, 2022 Guellala, Mednin</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/events.css" rel="stylesheet" />
        <link href="../css/button.css" rel="stylesheet" />
        <link href="./Mednin.css" rel="stylesheet" />
        <!-- Maps -->
        <script type="text/javascript" 
        src="http://maps.google.com/maps/api/js?sensor=false"></script>
        
    </head>
<body>

<h1> &nbsp;&nbsp;&nbsp; </h1>
    <h6> &nbsp;&nbsp;&nbsp; </h6>

    
    <div class="Timeline is-reversed">
        <article class="Timeline-item">
        <div class="Timeline-tile">
          <?php $e4=$eventc->recupererEvent('680')?>
            <h3><?PHP echo $e4['date']; ?>  <?PHP echo $e4['nom']; ?></h3>
            <h5><?PHP echo $e4['prix_dt']; ?></h5>

            <p>
                <a class="button" href="../payment/index.php?id=<?php echo $e4['id_eve'] ?>">Reserver Maintenant</a>
              </p> 


          <ul>
            <li>
                <p class="text"> 
                    <p>
                        <br>
                        <img class="mednin" src=<?php echo $e4['affiche'] ?> alt="Mednin Affiche" />
                        <br>
                        <br>
                    </p>
                    <?PHP echo nl2br($e4['description2']); ?> 
                    <br>
          
                </p>
                
              <br>
                  
                  <div class="image-box border-box">
                    <img src=<?php echo $e4['pic1'] ?> />
                  </div>

                  <br>
                  <br>

                  <div class="image-box border-box">
                    <img src=<?php echo $e4['pic2'] ?> />
                  </div>

                  <br>
                  <br>

                  <div class="image-box border-box">
                    <img src=<?php echo $e4['pic3'] ?> />
                  </div>

                  <br>
                  <br>

                  <div class="image-box border-box">
                    <img src=<?php echo $e4['pic4'] ?> />
                  </div>
                
            </li>
          </ul>
        </div>
        </article>
</div>
</body>

</html>