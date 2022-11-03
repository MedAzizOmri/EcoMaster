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
        <title>Decembre 1, 2022 Zgougou, Nabeul</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/events.css" rel="stylesheet" />
        <link href="../css/button.css" rel="stylesheet" />
        <link href="../events_detailed/Nabeul.css" rel="stylesheet" />
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
          <?php $e3=$eventc->recupererEvent('482')?>
           <h3><?PHP echo $e3['date']; ?>  <?PHP echo $e3['nom']; ?></h3>
          <h5><?PHP echo $e3['prix_dt']; ?></h5>

          <p>
                <a class="button" href="../payment/index.php?id=<?php echo $e3['id_eve'] ?>">Reserver Maintenant</a>
              </p> 


          <ul>
            <li>
                <p class="text"> 
                    <p>
                        <br>
                        <img class="nabeul" src=<?php echo $e3['affiche'] ?> alt="Nabeul Affiche" /> 
                        <br>
                        <br>
                    </p>
                    <?PHP echo nl2br($e3['description2']); ?> 
                    <br>
                    
                </p>
              
              <br>
                  
                  <div class="image-box border-box">
                    <img src=<?php echo $e3['pic1'] ?> />
                  </div>

                  <br>
                  <br>

                  <div class="image-box border-box">
                    <img src=<?php echo $e3['pic2'] ?> />
                  </div>

                  <br>
                  <br>

                  <div class="image-box border-box">
                    <img src=<?php echo $e3['pic3'] ?> />
                  </div>

                  <br>
                  <br>

                  <div class="image-box border-box">
                    <img src=<?php echo $e3['pic4'] ?> />
                  </div>

                
            </li>
          </ul>
        </div>
        </article>
</div>
</body>


</html>