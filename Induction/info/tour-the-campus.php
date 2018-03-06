<?php
setCookie("userintent","",(time+86400),"/~15011406");
session_start();
include('../php/functions.php');
$currentuser=getUserLevel();
$userid=$_SESSION['userid'];
$forename=$_SESSION['forename'];
$surname=$_SESSION['surname'];
$collegeid=$_SESSION['collegeid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | UHI Induction Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="../dist/favicons.ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../dist/favicons.ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../dist/favicons.ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../dist/favicons.ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../dist/favicons.ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../dist/favicons.ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../dist/favicons.ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../dist/favicons.ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../dist/favicons.ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../dist/favicons.ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../dist/favicons.ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../dist/favicons.ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../dist/favicons.ico/favicon-16x16.png">
    <link rel="manifest" href="../dist/favicons.ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../dist/favicons.ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Cookies -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>

</head>

<body>
  <!-- Nav Bar -->
  <?php if($currentuser['userlevel']<1) {
    include "../includes/navLevel1.php";
     } ?>

     <?php if($currentuser['userlevel']>1) {
       include "../includes/navLevel2.php";
        } ?>

  <h2 class="text-uppercase text-center" style="color:#37434d;">Perth UHI Campus </h2>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row clearmargin clearpadding row-image-txt">
                        <div data-aos="fade-left" data-aos-duration="300" data-aos-delay="450" data-aos-once="true" class="col-xs-12 col-sm-6 col-md-6 clearmargin clearpadding col-sm-push-6" style="background-image:url(&quot;../assets/img/banner.jpg&quot;);background-size:cover;height:400px;background-position:center;background-color:#37434d;color:#37434d;">
                            <div></div>
                        </div>
                        <div data-aos="fade-left" data-aos-duration="400" data-aos-delay="500" data-aos-once="true" class="col-xs-12 col-sm-6 col-md-6 col-sm-pull-6" style="padding:20px;background-color:#7e3ca6;">
                            <h1 style="color:#ffffff;">The Academy of Sport and Wellbeing</h1>
                            <hr>
                            <p style="color:#ffffff;">Academy of Sport and Wellbeing / ... Our gym equipment includes a variety of the latest cardiovascular and strength resistance equipment to help you with achieving your fitness goals and to inspire you to move your body, de-stress and improve or maintain your fitness levels</p>
                            <div style="text-align:center"><a class="btn btn-light btn-lg" role="button" href="https://www.perth.uhi.ac.uk/academy-of-sport-and-wellbeing/" target="_blank" >Learn more </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row clearmargin clearpadding row-image-txt">
                        <div data-aos="fade-left" data-aos-duration="600" data-aos-delay="600" data-aos-once="true" class="col-xs-12 col-sm-6 col-md-6 clearmargin clearpadding col-sm-push-6" style="background-image:url(&quot;../assets/img/banner.png&quot;);background-size:cover;height:400px;background-position:center;background-color:#37434d;color:#37434d;">
                            <div></div>
                        </div>
                        <div data-aos="fade-left" data-aos-duration="700" data-aos-delay="650" data-aos-once="true" class="col-xs-12 col-sm-6 col-md-6 col-sm-pull-6" style="padding:20px;background-color:#7e3ca6;">
                            <h1 style="color:#ffffff;">Brahan Building </h1>
                            <hr>
                            <p style="color:#ffffff;">We're delighted that you have chosen to come to Perth College UHI, one of Scotland's leading colleges of further and higher education and part of the University of the Highlands and Islands</p>
                            <div style="text-align:center"><a class="btn btn-light btn-lg" role="button" href="https://www.perth.uhi.ac.uk/" target="_blank" >Learn more </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonials-clean"></div>
    <div data-aos="fade-right" data-aos-once="true" class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100" data-aos-once="true" style="font-family:'Source Sans Pro', sans-serif;">Questions about your student experience?</h2>
            </div>
            <div class="buttons"><a class="btn btn-light" role="button" href="../account/login.php" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200" data-aos-once="true" style="font-family:'Source Sans Pro', sans-serif;background-color:#7e3ca6;color:#ffffff;">CHAT NOW</a></div>
        </div>
    </div>
    <div class="testimonials-clean"></div>
    <div class="footer-dark" style="background-color:#7e3ca6;">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 item text">
                      <h3 class="text-uppercase" style="color:#ffffff;font-family:'Source Sans Pro', sans-serif;">The University of the Highlands and Islands</h3>
                      <p><a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"   target="_blank" style="color:#ffffff;">About</a>
                        • <a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"  target="_blank" style="color:#ffffff;">News and Events</a>
                        • <a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"  target="_blank" style="color:#ffffff;">Business and employers</a>
                        • <a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"  target="_blank" style="color:#ffffff;">Vacancies</a>
                        • <a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"  target="_blank" style="color:#ffffff;">Give to UHI</a>
                        • <a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"  target="_blank" style="color:#ffffff;">FOI</a>
                        • <a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"  target="_blank" style="color:#ffffff;">Cookies</a>
                        • <a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"  target="_blank" style="color:#ffffff;">Contact Us</a></p>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3 class="text-uppercase" style="color:#ffffff;font-family:'Source Sans Pro', sans-serif;">About UHI</h3>
                        <ul>
                            <li><a href="#" style="color:#ffffff;">Argyll College UHI </a></li>
                            <li><a href="#">Highland Theological College UHI </a></li>
                            <li><a href="#">Inverness College UHI </a></li>
                            <li><a href="https://www.lews.uhi.ac.uk/" target="_blank">Lews Castle College UHI</a> </li>
                            <li><a href="https://www.moray.uhi.ac.uk/" target="_blank">Moray College UHI</a> </li>
                            <li><a href="https://www.nafc.uhi.ac.uk/" target="_blank">NAFC Marine Centre UHI</a> </li>
                            <li><a href="https://www.northhighland.uhi.ac.uk/" target="_blank">North Highland College UHI</a> </li>
                            <li><a href="https://www.orkney.uhi.ac.uk/" target="_blank">Orkney College UHI</a> </li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3 class="text-uppercase" style="color:#ffffff;font-family:'Source Sans Pro', sans-serif;">Information </h3>
                        <ul>
                            <li><a href="https://www.uhi.ac.uk/en/" target="_blank">Perth College UHI </a></li>
                            <li><a href="../info/opening-times.php">Opening Times</a></li>
                            <li><a href="../info/how-to-find-us/php" style="color:#ffffff;">How To Find Us</a></li>
                            <li><a href="../info/sitemap.php">Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-12 col-xl-12 offset-xl-0 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
                </div>
                <p class="copyright" style="color:#ffffff;">© University of the Highlands and IslandsRegistered office: 12b Ness Walk, Inverness, Scotland, IV3 5SQ&nbsp; </p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="../assets/js/script.min.js"></script>
    <script src="../dist/js/cookies.js"></script>

</body>

</html>
