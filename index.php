
<?php
include("$_SERVER[DOCUMENT_ROOT]/ECO-AWARE-master/Dashbord/controller/actualiteC.php");
$actualiteC= new actualiteC();
$actualite= $actualiteC->afficherActualite();

?>

<!DOCTYPE html>
<html  >
<head>
    
  <!-- Site made with Mobirise Website Builder v5.5.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.5.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/eco-aware-ico-200x122.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title >Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/parallax/jarallax.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
  </noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body id="top">


  <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-h">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html#top">
                        <img src="assets/images/eco-aware-ico-200x122.png" alt="Eco-Aware" style="height: 4.6rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-black display-7" href="https://mobiri.se"></a>
                </span>
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
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-success text-primary display-4" href="index.html#features3-y">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-success display-4" href="NavBarevents.html">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-success display-4" href="donations/doantions/charite/index.html">Donations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-success show text-primary display-4" href="Articles.php" aria-expanded="false">Articles</a>
                    </li>
                </ul>
                
                <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-primary display-4" href="login/register.html">
                        <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont mbr-iconfont-btn"></span>
                        Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

</section>

<section data-bs-version="5.1" class="header1 cid-s48MCQYojq mbr-fullscreen mbr-parallax-background" id="header1-f">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(41, 49, 50);"></div>

    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1">
                    <strong>DevOx presents:</strong>
                    <strong>
                        <br>
                    </strong>
                </h1>
                
                <p class="mbr-text mbr-fonts-style display-7">A new and simple easy way to participate in saving our mother earth&nbsp;
                    <br>on our website u can see the latest news all about environement ,write articles ,attend&nbsp;
                    <br>related events or give a donation which will go directly in favor of a slection of 
                    <a href="index.html#bottom" class="text-primary">charities</a> we slected.
                </p>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features3 cid-sOmcR7j2TL" id="features3-y">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>News</strong>
            </h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-7">Hover on cards for a brief description</h5>
        </div>
        <?php foreach ($actualite as $a){ ?>

        <div class="row mt-4">
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <a href="Articles.html#image2-n">
                            <img src="<?php echo $a['ImageActualite'];?>" alt="">
                        </a>
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7">
                            <strong><?php echo $a['TitreActualite'];?></strong>
                        </h5>
                    </div>
                    
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <a href="Articles.html#image1-o">
                            <img src="assets/images/image350x235cropped-1-350x235.jpg" alt="">
                        </a>
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7">
                            <div>
                                <strong>
                                    UN system generated 25% fewer greenhouse gas emissions in 2020 
                                </strong>
                            </div>
                            <div>
                                <strong>
                                    <br>
                                </strong>
                            </div>
                        </h5>
                    </div>
                    
                </div>
            </div><div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <a href="Articles.php">
                            <img src="assets/images/image350x235cropped-2-350x235.jpg" data-slide-to="2" data-bs-slide-to="3" alt="">
                        </a>
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7">
                            <strong>
                                New FAO analysis reveals carbon footprint of agri-food supply chain
                            </strong>
                            <div>
                                <strong>
                                    <br>
                                </strong>
                            </div>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <a href="Articles.html#image1-q">
                            <img src="assets/images/image350x235cropped-3-350x235.jpg" data-slide-to="3" alt="">
                        </a>
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7">
                            <strong>
                                Many countries ‘unsupported and unprepared’ to address climate health risks: WHO
                            </strong>
                        </h5>
                    </div>
                    
                </div>
            </div><div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/image350x235cropped-5-350x235.jpg" data-slide-to="4" data-bs-slide-to="5" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7">
                            <strong>
                                By 2030, half world’s population will be exposed to flooding, storms, tsunamis
                            </strong>
                        </h5>
                    </div>
                    
                </div>
            </div><div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/image350x235cropped-6-350x235.jpg" data-slide-to="5" data-bs-slide-to="5" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7">
                            <strong>
                                ‘Dramatic’ boost needed in climate adaptation: UN environment agency
                            </strong>
                        </h5>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="slider3 mbr-embla cid-sOm9UXqm4J" id="slider3-w">
    

    
    <div class="position-relative text-center">
        <div class="col-12">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                <strong>Our team</strong>
            </h3>
            
        </div>
        <div class="embla" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-loop="true" data-auto-play="true" data-auto-play-interval="7" data-draggable="true">
            <div class="embla__viewport container-fluid">
                <div class="embla__container">
                    <div class="embla__slide slider-image item active" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="card-wrap">
                            <div class="item-wrapper position-relative">
                                <div class="image-wrap">
                                    <img src="assets/images/bahaa-434x578.jpeg">
                                </div>
                            </div>
                            <div class="content-wrap">
                                <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                                    <strong>Baha Eddine Bouzid</strong>
                                </h5>
                                <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                    <strong>Programmer</strong>
                                </h6>
                                
                                <div class="social-row display-7">
                                    <div class="soc-item">
                                        <a href="https://www.facebook.com/bahaaeddine.bouzid/" target="_blank">
                                            <span class="mbr-iconfont socicon-facebook socicon"></span>
                                        </a>
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="card-wrap">
                            <div class="item-wrapper position-relative">
                                <div class="image-wrap">
                                    <img src="assets/images/aziz-600x600.jpeg" data-slide-to="1" data-bs-slide-to="1">
                                </div>
                            </div>
                            <div class="content-wrap">
                                <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                                    <strong>Azyz Ayed</strong>
                                </h5>
                                <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                    <strong>Manager</strong>
                                </h6>
                                
                                <div class="social-row display-7">
                                    <div class="soc-item">
                                        <a href="https://www.facebook.com/skeetme01" target="_blank">
                                            <span class="mbr-iconfont socicon-facebook socicon"></span>
                                        </a>
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div><div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="card-wrap">
                            <div class="item-wrapper position-relative">
                                <div class="image-wrap">
                                    <img src="assets/images/118154616-3302881853132710-7849984634456189423-n-600x397.jpeg" data-slide-to="2" data-bs-slide-to="2">
                                </div>
                            </div>
                            <div class="content-wrap">
                                <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                                    <strong>Med Aziz Omri</strong>
                                </h5>
                                <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                    <strong>Analyst</strong>
                                </h6>
                                
                                <div class="social-row display-7">
                                    <div class="soc-item">
                                        <a href="https://www.facebook.com/azizbenridha7" target="_blank">
                                            <span class="mbr-iconfont socicon-facebook socicon"></span>
                                        </a>
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="card-wrap">
                            <div class="item-wrapper position-relative">
                                <div class="image-wrap">
                                    <img src="assets/images/iheb-chrif-600x600.jpg">
                                </div>
                            </div>
                            <div class="content-wrap">
                                <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                                    <strong>Iheb Chérif</strong>
                                </h5>
                                <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                    <strong>Analyst</strong>
                                </h6>
                                
                                <div class="social-row display-7">
                                    <div class="soc-item">
                                        <a href="https://www.facebook.com/ihebchrif.11" target="_blank">
                                            <span class="mbr-iconfont socicon-facebook socicon"></span>
                                        </a>
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div><div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="card-wrap">
                            <div class="item-wrapper position-relative">
                                <div class="image-wrap">
                                    <img src="assets/images/dhia-mediouni-600x450.jpeg" data-slide-to="4" data-bs-slide-to="5">
                                </div>
                            </div>
                            <div class="content-wrap">
                                <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                                    <strong>Dhia Mediouni</strong>
                                </h5>
                                <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                    <strong>Analyst</strong>
                                </h6>
                                
                                <div class="social-row display-7">
                                    <div class="soc-item">
                                        <a href="https://www.facebook.com/dhia.mediouni" target="_blank">
                                            <span class="mbr-iconfont socicon-facebook socicon"></span>
                                        </a>
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="embla__button embla__button--prev">
                <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Previous</span>
            </button>
            <button class="embla__button embla__button--next">
                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<?php }?>
<section data-bs-version="5.1" class="footer3 cid-s48P1Icc8J mbr-reveal" once="footers" id="footer3-i">
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    <li class="foot-menu-item mbr-fonts-style display-7">Esprit</li>
                </ul>
                <img class="batta" src="assets\images\DEVOX.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">

            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2020 DevOx. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
  
</section>
<section style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; ">
    <a href="https://mobirise.site/q" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
    <p style="flex: 0 0 auto; margin:0; padding-right:1rem;"></p>
</section>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  
<script src="assets/parallax/jarallax.js"></script>  
<script src="assets/smoothscroll/smooth-scroll.js"></script>  
<script src="assets/ytplayer/index.js"></script>  
<script src="assets/dropdown/js/navbar-dropdown.js"></script>  
<script src="assets/embla/embla.min.js"></script>  
<script src="assets/embla/script.js"></script>  
<script src="assets/theme/js/script.js"></script>  

 <div id="scrollToTop" class="scrollToTop mbr-arrow-up" >
     <a style="text-align: center;"href="#top">
        <i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i>
    </a>
 </div>
    <input name="animation" type="hidden">

  </body>
</html>