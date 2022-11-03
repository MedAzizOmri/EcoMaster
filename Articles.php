
<?PHP
	include_once "./Dashbord/controller/articlec.php";
    include_once "./Dashbord/model/article.php";
    
   // include_once "./Dashbord/config.php";
   $bdd=new PDO('mysql:host=localhost;dbname=eco', 'root', '');
	$articles=$bdd->query('SELECT * FROM articles ORDER BY datepub DESC');

    
?>

<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.5.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/eco-aware-ico-200x122.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Articles</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-l">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html#top">
                        <img src="assets/images/eco-aware-ico-200x122.png" alt="Eco-Aware" style="height: 4.6rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="https://mobiri.se"></a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-success text-primary display-4" href="index.html#features3-y">News</a></li><li class="nav-item"><a class="nav-link link text-success display-4" href="NavBarevents.html">Events</a></li><li class="nav-item"><a class="nav-link link text-success display-4" href="https://mobirise.com">Donations</a></li>
                    <li class="nav-item"><a class="nav-link link text-success show text-primary display-4" href="Articles.php#top" aria-expanded="false">Articles</a></li></ul>
                
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="https://mobiri.se"><span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont mbr-iconfont-btn"></span>Sign Up</a></div>
            </div>
        </div>
    </nav>

</section>

<section data-bs-version="5.1" class="features1 cid-sOmfP4ANcf" id="features2-10">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <a href="writearticle.php#top"><span class="mbr-iconfont mobi-mbri-plus mobi-mbri"></span></a>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                            <strong>Add article</strong><br><strong><br></strong></h4>
                    </div>
                </div>
            </div>
            
            
            
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image2 cid-sOlIpwBuZ3" id="image2-n">
    <button> Sort by Most Recent </button>
    <button> Sort by Oldest </button>
    <button> Sort Most Recent </button>
    <input name='searchm 'type="text" placeholder ="Search">   <button href name='search'   > SEARCH </button>
    
<br><br><br>

<?php
if (isset($_GET['search']) AND !empty($_GET['search'])){
    $s=$_GET['searchm'];
    

    }
while ($a=$articles->fetch()){ 
 
    ?>
    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <a  href="article.php?id=<?php echo $a['id'];?>"><img src="<?php echo $a['img_dir']?>" style="
    margin-top: -26px;
    margin-bottom: 120px;    "></a>
    
                    
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong><?PHP echo $a['subject']; ?></strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7">
                    <?PHP echo $a['contenu']; ?></p>
                    <h3 style="color:green ;font-size: 25px;"><?PHP echo $a['datepub']; ?> <br>  </h3><h4>Written By :<?PHP echo $a['writer']; ?></h4>
                </div>
            </div>
        </div>
    </div>
    <?PHP
				}
			?>
</section>





<section data-bs-version="5.1" class="footer3 cid-s48P1Icc8J mbr-reveal" once="footers" id="footer3-m">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7">Esprit</li><li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"></li></ul>
            </div>
            
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2020 DevOx. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
  
</section><section style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; "><a href="https://mobirise.site/q" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;"></p></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/parallax/jarallax.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/embla/embla.min.js"></script>  <script src="assets/embla/script.js"></script>  <script src="assets/theme/js/script.js"></script>  
    
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>