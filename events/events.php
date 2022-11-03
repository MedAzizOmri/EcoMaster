
<?php 
require_once '..\Dashbord\controller\eventc.php';
require_once '..\Dashbord\model\event.php';
require_once '..\Dashbord\configevent.php';

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

        <title>EcoAware - Events</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../events/css/styles.css" rel="stylesheet" />
        <link href="../events/css/events.css" rel="stylesheet" />
        <link href="../events/css/button.css" rel="stylesheet" />

    </head>
<h1> &nbsp;&nbsp;&nbsp; </h1>
<h6> &nbsp;&nbsp;&nbsp; </h6>

<body>

<div class="Timeline is-reversed">
  <article class="Timeline-item">
    <div class="Timeline-tile">
      <?php $e1=$eventc->recupererEvent('552');?>
      <h3><?PHP echo $e1['date']; ?>  <?PHP echo $e1['nom']; ?></h3>
      <h4><?PHP echo $e1['prix_dt']; ?></h4>

        <div class="text">
            <?PHP echo $e1['description']; ?> 
            <br>
            <a href="../events/events_detailed/zaghouan.php">Plus de details</a>
        </div>
       <img src=<?php echo $e1['affiche'] ?> alt="Zaghouan Affiche" /> 
          <!-- Button (New) -->
          <a class="button" href="../events/payment/index.php?id=<?php echo $e1['id_eve'] ?>">Reserver Maintenant</a>
    </div>
  </article>


  <article class="Timeline-item">
    <div class="Timeline-tile">
    <?php $e2=$eventc->recupererEvent('789')?>
      <h3><?PHP echo $e2['date']; ?>  <?PHP echo $e2['nom']; ?></h3>
      <h4><?PHP echo $e2['prix_dt']; ?></h4>
      
            <div class="text"> 
                <?PHP echo $e2['description']; ?> 
                <br>
                <a href="../events/events_detailed/Djerba.php">Plus de details</a>
            </div>
              <img src=<?php echo $e2['affiche'] ?>  alt="Djerba Affiche" /> 
          <!-- Button (New) -->
          <a class="button" href="../events/payment/index.php?id=<?php echo $e2['id_eve'] ?>">Reserver Maintenant</a>
      
    </div>
  </article>
  

  <article class="Timeline-item">
    <div class="Timeline-tile">
    <?php $e3=$eventc->recupererEvent('482')?>
      <h3><?PHP echo $e3['date']; ?>  <?PHP echo $e3['nom']; ?></h3>
      <h4><?PHP echo $e3['prix_dt']; ?></h4>
      
      <div class="text"> 
              <?PHP echo $e3['description']; ?> 
            <br>
            <a href="../events/events_detailed/Nabeul.php">Plus de details</a>
      </div>
          <img src=<?php echo $e3['affiche'] ?>  alt="Nabeul Affiche" /> 
          <!-- Button (New) -->
          <a class="button" href="../events/payment/index.php?id=<?php echo $e3['id_eve'] ?>">Reserver Maintenant</a>
    </div>
  </article>


  
  <article class="Timeline-item">
    <div class="Timeline-tile">
    <?php $e4=$eventc->recupererEvent('680')?>
      <h3><?PHP echo $e4['date']; ?>  <?PHP echo $e4['nom']; ?></h3>
      <h4><?PHP echo $e4['prix_dt']; ?></h4>

      <div class="text"> 
              <?PHP echo $e4['description']; ?> 
            <br>
            <a href="../events/events_detailed/Mednin.php">Plus de details</a>
      </div>
        
          <img src=<?php echo $e4['affiche'] ?>  alt="Mednin Affiche" /> 

          <!-- Button (New) -->
          <a class="button" href="../events/payment/index.php?id=<?php echo $e4['id_eve'] ?>">Reserver Maintenant</a>
    </div>
  </article>
	
    <div id="pied_de_page">
	  <p>&nbsp;&nbsp; © Copyright 2020 DevOx. All Rights Reserved.</p>
	</div>

  
</body>

 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</html>