
<?php

    require_once 'Dashbord/controller/articlec.php';  
    require 'Dashbord\model\article.php';
    require 'C:\xampp\htdocs\ECO-AWARE\Dashbord\config.php';
    

    $error = "";
    // create user
    
    // create an instance of the controller
    $articlec = new articleC();
    if (
        isset($_POST["subject"]) &&
        isset($_POST["writer"]) &&
        isset($_POST["datepub"]) &&
        isset($_POST["contenu"]) &&
        isset($_POST["img_dir"]) 
        
    ) {
        if (
            !empty($_POST["subject"]) && 
            !empty($_POST["writer"]) &&
            !empty($_POST["datepub"]) &&
            !empty($_POST["contenu"])&&
            !empty($_POST['img_dir']) 
        ) {
            $article = new article(
                $_POST['subject'], 
                $_POST['writer'],
                $_POST['datepub'],
                $_POST['contenu'], 
                $_POST['img_dir'] 
                
                
            );
            $articlec->ajouterarticle($article);
            mail('Un Ajout au table article','Une nouvelle entite article est ajouter il y a quelques secondes ','From');
           header('Location:index.html');
           echo '<script>alert("posted")</script>';
        }
        else
            $error = "Missing information";
    }  

    
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
  
  
  <title>write article</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <!-- <link rel="stylesheet" href="assets/theme/css/style.css"> -->
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src='https://cloud.tinymce.com/5/tinymce.min.js?apiKey=iagbkaxsrt9ykaaavjyn1xsjaqag0pyaexvng483bvpw5uqz'></script>
  
  
  <style>

#feedback-form {
  width: 60%;
  margin: 0 auto;
  background-color: #fcfcfc;
  padding: 20px 50px 40px;
  box-shadow: 1px 4px 10px 1px #aaa;
  font-family: sans-serif;
}

#feedback-form * {
    box-sizing: border-box;
}

#feedback-form h2{
  text-align: center;
  margin-bottom: 30px;
}

#feedback-form input {
  margin-bottom: 15px;
}


#feedback-form input[type=date]  {
  display: block;
  height: 32px;
  padding: 6px 16px;
  width: 100%;
  border: none;
  background-color: #f3f3f3;
}

#feedback-form textarea  {
  display: block;
  height: 300px;
  padding: 6px 16px;
  width: 100%;
  border: none;
  background-color: #f3f3f3;
}


#feedback-form input[type=text]  {
  display: block;
  height: 32px;
  padding: 6px 16px;
  width: 100%;
  border: none;
  background-color: #f3f3f3;
}

#feedback-form label {
  color: #777;
  font-size: 0.8em;
}

#feedback-form input[type=date] {
  float: center;
}

#feedback-form input:not(:checked) + #feedback-phone {
  height: 0;
  padding-top: 0;
  padding-bottom: 0;
}

#feedback-form #feedback-phone {
  transition: .3s;
}

#feedback-form button[type=submit] {
  display: block;
  margin: 20px auto 0;
  width: 150px;
  height: 40px;
  border-radius: 25px;
  border: none;
  color: #eee;
  font-weight: 700;
  box-shadow: 1px 4px 10px 1px #aaa;


  background: #207cca; /* Old browsers */
  background: -moz-linear-gradient(left, #207cca 0%, #9f58a3 100%); /* FF3.6-15 */
  background: -webkit-linear-gradient(left, #207cca 0%,#9f58a3 100%); /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(to right, #207cca 0%,#9f58a3 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#207cca', endColorstr='#9f58a3',GradientType=1 ); /* IE6-9 */
}



  </style>
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu cid-sOnzJoc40J" once="menu" id="menu1-1u">
    
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
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-success text-primary display-4" href="index.html#features3-y">News</a></li><li class="nav-item"><a class="nav-link link text-success display-4" href="https://mobirise.com">Events</a></li><li class="nav-item"><a class="nav-link link text-success display-4" href="https://mobirise.com">Donations</a></li>
                    <li class="nav-item"><a class="nav-link link text-success show text-primary display-4" href="Articles.php" aria-expanded="false">Articles</a></li></ul>
                
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="https://mobiri.se"><span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont mbr-iconfont-btn"></span>Sign Up</a></div>
            </div>
        </div>
    </nav>

</section>

<section data-bs-version="5.1" class="image3 cid-sOnAQdFLBu" id="image3-1x">
    <!-- <H2>Write Article:</H2> -->
    <div  id="feedback-form" class="testbox">
        <form action="" method="POST">
          <br>
          <h1>Add article</h1>
          <p></p>
          <h4>Subject article</h4>
          <div >
            <input type="text" name="subject" id="subject"  placeholder="Subject" required maxlength = "40" onkeyup="this.value=this.value.toUpperCase()"/>
          </div>
          <h4>Article writer</h4>
          <div >
            <input type="text" name="writer" id="writer" placeholder="Writer" required maxlength = "40"/>
          </div>
          <h4>Date article<span>*</span></h4>
          <div class="date">
            <input value="<?php echo date('Y-m-d'); ?>" type="date" name="datepub" id="datepub" min="<?php echo date('Y-m-d'); ?>"required/>
            <i class="fas fa-calendar-alt"></i>
          </div>
          <h4>Contenu article</h4>
          <textarea rows="5" id="contenu" name="contenu" required ></textarea>
          <h4>Select image to upload:</h4>
          <input type="text" placeholder="paste a link to yout image " name="img_dir" id="img_dir">
          <div class="btn-block">
            <button  class="add" type="submit" name="submit" value="submit"  onclick="return okEvent();" >Add</button>
            
          </div>
          
        </form>
      </div>
    <!-- <form id="myform">
        
        <textarea name="text1" class="tinymce"></textarea>
        <span class="error" style="color: #a80000;font-weight: bold;"></span>
        <p><input type="submit" name="submit" id="submit" /></p>
    
        <fieldset class="actions">
            <button id="submit">Post</button>
        </fieldset>
    
        <div id="post-container">
            <form action="/action_page.php">
                <input class="imageup" type="file" id="myFile" name="filename">
                
              </form>  -->
    </div>
        
        </form>
    <!-- <div class="containerDetails">
        <fieldset class="inputs">
            <textarea type="text" name="post" id="text-box" placeholder="Your Notes..."></textarea>
    
        </fieldset>
    
        <center><fieldset class="actions">
            <button id="submit">Post</button>
        </fieldset></center>
    
        <div id="post-container">
            <form action="/action_page.php">
                <input class="imageup" type="file" id="myFile" name="filename">
                
              </form> 
    </div>
        
    </div> -->

<!-- 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="text-wrapper">
                    <textarea >d</textarea>
                    
                </div>
            </div>
        </div>
    </div> -->
</section>
<!-- 
<section data-bs-version="5.1" class="footer3 cid-sOnzJqjeWV mbr-reveal" once="footers" id="footer3-1v">

    

    

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



 -->
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">

    </body>
</html>