<?php
include 'Dashbord\config.php';
include 'dbh.inc.php';
include 'Dashbord\controller\articlec.php';
include 'Dashbord\model\article.php';
// include 'edit_cmnt.php';
function setcomments($conn){
    $db= new config();
    $conn=$db->getConnexion();
    if (isset($_POST['commentSubmit'])&&!empty($_POST['message'])) {
$id_article=$_GET['id'];

$date_comment=$_POST['date_comment'];
$message=$_POST['message'];

$sql="INSERT INTO `comments` (id_article,id_user,date_comment,message) 
VALUES ('$id_article','$id_article','$date_comment','$message')";
try {
    $query = $conn->prepare($sql);
				$query->execute();			
} catch (PDOException $e) {
var_dump($e->getMessage());
}
    }

}


function getComments($conn){
    $sql="SELECT * FROM `comments` as c INNER JOIN articles as a WHERE 55580=c.id_user ";
    $result=$conn->query($sql);
    while(   $row=$result->fetch_assoc()){
        echo"<div class='commentbox'><p>";
            echo $row['id_user']."<br>";
            echo $row['date_comment']."<br>";
            echo nl2br($row['message']);
        echo"</p></div>";
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


    <title>article1</title>
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
                                href="https://mobirise.com">Events</a></li>
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
                        <img src="assets/images/image1440x560cropped-1440x560.jpg" alt="Mobirise">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="content5 cid-sOlK3iUJ5u" id="content5-v">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">

                    <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-2">A matter of life or death: At COP26,
                        vulnerable countries tell developed nations it’s time to keep their promise on climate finance
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">Their main call: developed countries must uphold their
                        promise of finance and support to the small states that are at risk of losing so much to the
                        combat against climate change.<br>“From the ocean came forth life, peace and comfort, a world
                        not known to most but that was one with my people…We will remember a time when our homes stood
                        proud and tall, for today they stand no more. That place is now taken by the ocean”.<br>The
                        eighth day of the UN Climate Conference began with a poem recited by an activist from Papua New
                        Guinea, an island nation that lies in the South-western Pacific. Her words resonated throughout
                        the meeting room in the Blue Zone, while tears appeared to be rolling down her cheeks.<br>“We
                        will never know when the tide raises and swallows our homes. Our cultures, our languages and our
                        traditions will be taken by the ocean. When you say by 2030 to 2050, how can you see deadlines 9
                        to 29 years away when my people have proved that we must act now and not waste any more time,”
                        she said, explaining that the ocean that once gave her people life, now has become an
                        “executioner”.<br>She was not alone. Just a few metres away in a different room, another young
                        woman and survivor of Super Typhoon Haiyan which hit the Philippines exactly eight years ago
                        today, had an equally stark message for the world:<br>“They stopped counting when the death toll
                        reached 6,000, but there are 1,600 bodies still missing. Today, we are still shouting for
                        justice for our friends and families who have lost their lives due to climate disasters. The
                        Philippines’ youth are fighting for a future that is not riddled with anxiety and fear that
                        another Haiyan might come at any time to threaten our loved one’s lives and dreams. We do not
                        deserve to live in fear”, she said.<br>For her, COP26 should be an opportunity to champion the
                        ‘loss and damage agenda’.<br>“Today exactly eight years since Haiyan changed drastically the
                        live of Filipinos, impacts of the climate change are only getting worse. They shouldn’t have to
                        wait for justice,” she said, adding that companies and other carbon emitters should be held
                        responsible.<br>The fight for ‘loss and damage’
                        <br>The term ‘loss and damage’ is used within the UN Framework Convention on Climate Change
                        (UNFCCC) process to refer to the harms caused by man-made climate change.<br>However, the
                        appropriate response to this issue has been disputed since the Convention’s
                        adoption.<br>Establishing liability and compensation for loss and damage has been a
                        long-standing goal for vulnerable and developing countries in the Alliance of Small Island
                        States (AOSIS) and the Least Developed Countries Group in negotiations. However, developed
                        countries have for years resisted calls to have a proper discussion of the issue.<br>“Six years
                        after the Paris Agreement, which has its own article on loss and damage, small countries still
                        have to fight to have an agenda item on [this] at COP,” said a representative of the NGO Climate
                        International during a press conference.<br>The other big theme of the day: adaptation, also has
                        a finance issue involved. Leaders from Small Islands Developing States made clear that last’s
                        week commitments on forests, agriculture, private finance and other matters are still not
                        enough.<br>“We welcome the new commitments made last week, but in due respect to be honest I
                        can’t feel any excitement for them… Several new pledges are missing, and others have shown up
                        with insufficient commitments that have succeed only in putting speedbumps on the road that
                        leads to the wrong side of 1.5 degrees of warming,” said Frank Bainimarama, the Prime Minister
                        of Fiji.
                        <br>
                        <br></p>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="image3 cid-sOnvon8Djo" id="image3-18">




        <!-- <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="image-wrapper">
                        <img src="assets/images/image1170x530cropped-1171x530.jpg" alt="Mobirise">

                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section data-bs-version="5.1" class="content5 cid-sOnvqdu37U" id="content5-19">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">

                    <!-- <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-2">The broken promise</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Last week’s announcement that the promise of $100
                        billion a year for climate finance initiatives in developing countries will be delayed again was
                        the ‘big elephant of the room’ on Monday, but it was acknowledged by many leaders.<br>“The
                        developed nations are failing us, they’re the ones with the resources and technology to make a
                        difference yet they have left potential for clean energy and adaptation off the table by missing
                        the $100 billion pledge two years running… We, the most vulnerable are told to suck it up and
                        wait until 2023”, added Mr. Bainimarama.<br>The Prime Minister reminded that since the signing
                        of the Paris Agreement, 13 cyclones have struck Fiji, and as such, building up resilience must
                        not be delayed, and for that, money is required “plain and simple.”<br>“I’m not prepared along
                        with every Fijian to do what is necessary to secure our food chain and ensure we can grow our
                        island economy. We have solutions and we are always keen to show our experience”, he
                        highlighted, telling delegates that they have also already offered refuge to people of the
                        island nations of Kiribati and Tuvalu in case their homes are the first to
                        disappear.<br>Grenada’s Climate and Environment Minister Simon Stiell also said the promises
                        made last week need to be trickled down to show meaningful action on the ground.<br>“Climate
                        change for us in the islands is not an abstract thing. It is real and it is lived every single
                        day and if mitigation is a marathon getting us to that 1.5 target, adaptation is the sprint as
                        we battle the impacts and the urgency to protect life and livelihoods”, he
                        underscored.<br>Meanwhile, Kathy Jetñil-Kijiner, climate envoy from the Marshall Islands said
                        that science is starting to reveal that adaptation measures are going to cost way more than $100
                        billion a year.<br>“We are looking at several billions of dollars for implementing our national
                        adaptation plans. We’ve received preliminary studies that show us estimates of tens of billions
                        for reclaiming land, elevating parts of our lands, and internal migration. When we negotiate a
                        new finance target by 2025 it must be based on science. The first target was an estimate,” she
                        explained.&nbsp;&nbsp;<br></p> -->
                </div>
            </div>
        </div>
        <div class="react "><input type="radio" id="reactions-curtir" name="reactions">
            <input type="radio" id="reactions-amei" name="reactions">
            <input type="radio" id="reactions-haha" name="reactions">
            <input type="radio" id="reactions-uau" name="reactions">
            <input type="radio" id="reactions-triste" name="reactions">
            <input type="radio" id="reactions-grr" name="reactions">
            <div class="facebook-reactions">

                <span class="react">React</span>

                <div class="reactions">
                    <ul>
                        <li class="reactions-curtir" data-title="Curtir"><label for="reactions-curtir"></label></li>
                        <li class="reactions-amei" data-title="Amei"><label for="reactions-amei"></label></li>
                        <li class="reactions-haha" data-title="Haha"><label for="reactions-haha"></label></li>
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
        <?php

echo" <form method='POST' action='".setcomments($conn)."'>
    <input type='hidden' name='id_user' value='Anonymous'>
    <input type='hidden' name='date_comment' value='".date('Y-m-d H:i:s')."'>
 

    
    <textarea class ='textareac' name='message' cols='30' rows='10'></textarea><br>
    <button class='cbutton' name='commentSubmit' type='submit' >comment</button>
</form>";
getComments($conn);
?>
            <div id="post-container">
            </div>
        </div>
    </section>

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