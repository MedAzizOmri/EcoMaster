<?php
//include("$_SERVER[DOCUMENT_ROOT]/ECO-AWARE-master/Dashbord/config.php");
// include 'dbh.inc.php';
include 'Dashbord\controller\articlec.php';
include 'Dashbord\model\article.php';
include_once 'comments.php';

$bdd=new PDO('mysql:host=localhost;dbname=eco', 'root', '');
if(isset($_GET['id']) AND !empty($_GET['id']) ) {
    $get_id=htmlspecialchars($_GET['id']);
    $article=$bdd->prepare('SELECT * FROM articles WHERE id=?');
    $article->execute(array($get_id));
    if($article->rowCount()==1){
$article=$article->fetch();
$titre=$article['subject'];
$contenu=$article['contenu'];

    }else {
        die('404');
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.5.0, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.5.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/eco-aware-ico-200x122.png" type="image/x-icon">
    <meta name="description" content="">


    <title><?PHP echo $article['subject']; ?></title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/animatecss/animate.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload"
        href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
        </noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://cloud.tinymce.com/5/tinymce.min.js?apiKey=iagbkaxsrt9ykaaavjyn1xsjaqag0pyaexvng483bvpw5uqz'>
    </script>
<style>
    .edit_btn{
        position: absolute;
        top: 0px;
        right: 0px;
    }
    .edit_btn button{
        width: 50px;
        height: 30px;
        opacity: 0.7;
    }
    .edit_btn button :hover{
        opacity: 1;
        
    }
    .commentbox p{
        font-family: arial;
        font-size: 14px;
        line-height: 16px;
        font-weight: 100;
        text-align: left;
    }
    .commentbox{
        width: 375px;
        padding: 20px;
        margin-bottom: 4px;
        background-color: lightgray;
        border-radius: 4px;
        float: center;
position: relative;
    }
   
    .textareac{
        width: 400px;
        height: 100px;
        background-color: #fff;
        resize: none;
    }
    .cbutton{width: 90px;
    height: 30px;
    background-color: #282828;
    border: none;
    color:  #FFF;
    font-family: arial;
    font-weight: 400;
    cursor: pointer;
    margin-bottom: 30px;
    }
    .deletecmnt{
        position: absolute;
        top: 0;
        right: 0;
    }
    .deletecmnt button{
        width: 50px;
        height: 20px;
        color:white ;
        background-color: black;
        opacity: 0.7;
        font-size: small;
        padding-left: 2px;
        padding-right: 2px;
        
    }
    .deletecmnt button :hover{
        opacity: 1;
    }
</style>



</head>

<body>

    <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-r">

        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="index.html#top">
                            <img src="assets/images/eco-aware-ico-200x122.png" alt="Eco-Aware" style="height: 4.6rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7"
                            href="https://mobiri.se"></a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                    data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-success text-primary display-4"
                                href="index.html#features3-y">News</a></li>
                        <li class="nav-item"><a class="nav-link link text-success display-4"
                                href="NavBarevents.html">Events</a></li>
                        <li class="nav-item"><a class="nav-link link text-success display-4"
                                href="https://mobirise.com">Donations</a></li>
                        <li class="nav-item"><a class="nav-link link text-success show text-primary display-4"
                                href="Articles.php" aria-expanded="false">Articles</a></li>
                    </ul>

                    <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4"
                            href="https://mobiri.se"><span
                                class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont mbr-iconfont-btn"></span>Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>

    </section>

    <section data-bs-version="5.1" class="image3 cid-sOlK1KNFDC" id="image3-u">




        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="image-wrapper">
                        <img src="<?php echo $article['img_dir']?>" alt="Mobirise">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="content5 cid-sOlK3iUJ5u" id="content5-v">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                <?php echo $article['id']; ?></p>

                    <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-2"><?PHP echo $article['subject']; ?> </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo $article['contenu']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="image3 cid-sOnvon8Djo" id="image3-18">



    <section data-bs-version="5.1" class="content5 cid-sOnvqdu37U" id="content5-19">

        
        <div class="react "><input type="radio" id="reactions-curtir" name="reactions">
            <input type="radio" value="1" id="reactions-amei" name="reactions">
            <input type="radio" value="1" id="reactions-haha" name="reactions">
            <input type="radio" value="1"id="reactions-uau" name="reactions">
            <input type="radio" value="1"id="reactions-triste" name="reactions">
            <input type="radio" value="1"id="reactions-grr" name="reactions">
            <div class="facebook-reactions">

                <span class="react">React</span>

                <div class="reactions">
                    <ul>
                        <li class="reactions-curtir" data-title="Curtir"><label for="reactions-curtir"></label></li>
                        <li class="reactions-amei" data-title="Amei"><label for="reactions-amei"></label></li>
                        <li class="reactions-haha" data-title="Haha" ><label for="reactions-haha"></label></li>
                        <li class="reactions-uau" data-title="Uau"><label for="reactions-uau"></label></li>
                        <li class="reactions-triste" data-title="Triste"><label for="reactions-triste"></label></li>
                        <li class="reactions-grr" data-title="Grr"><label for="reactions-grr"></label></li>
                    </ul>
                </div>
            </div>
        </div>

        <div>


        </div>
        <div class="containerDetails" >
        
            <div id="post-container">
            </div>
        </div>
        
    </div>
    </section>

    <?php

echo" <form method='POST' action='".setcomments($conn)."'>
    <input type='hidden' name='id_user' value='Anonymous'>
    <input type='hidden' name='date_comment' value='".date('Y-m-d H:i:s')."'>
 

    
    <textarea class ='textareac' name='message' cols='30' rows='10'></textarea><br>
    <button class='cbutton' name='commentSubmit' type='submit' >comment</button>
</form>";

 $ida=$article['id'];
getComments($conn,$ida); ?>
    <section data-bs-version="5.1" class="footer3 cid-s48P1Icc8J mbr-reveal" once="footers" id="footer3-s">





        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="row row-links">
                    <ul class="foot-menu">





                        <li class="foot-menu-item mbr-fonts-style display-7">Esprit</li>
                        <li class="foot-menu-item mbr-fonts-style display-7"></li>
                        <li class="foot-menu-item mbr-fonts-style display-7"></li>
                    </ul>
                </div>

                <div class="row row-copirayt">
                    <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                        © Copyright 2020 DevOx. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <section
        style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; ">
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

    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
                class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
</body>

</html>