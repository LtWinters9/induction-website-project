<?php
setCookie("userintent","",(time+86400),"/~15011406");
session_start();
date_default_timezone_set('London/GMT');
include('../../php/functions.php');
require_once('../../db_config.php');
$currentuser=getUserLevel();
$userid=$_SESSION['userid'];
$forename=$_SESSION['forename'];
$surname=$_SESSION['surname'];
$modulename=$_SESSION['modulename'];
$collegeid=$_SESSION['collegeid'];
$userid=checkUser($_SESSION['userid'],session_id(),2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Information | UHI Induction Services<</title>
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
    <link rel="stylesheet" href="../../assets/css/styles.min.css">

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
  <?php if($currentuser['userlevel']>1) {
    include "../includes/navLevel2.php";
     } ?>
    <div class="card">
        <div class="card-header">
            <header></header>
            <h3 class="text-center">Welcome to your Course,<?php echo $modulename; ?> <?php echo $forename." ".$surname; ?>.</h3>
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" href="#item-1-1" id="item-1-1-tab" data-toggle="tab" role="tab" aria-controls="item-1-1" aria-selected="true" style="color:#7e3ca6;">Staff Information</a></li>
                <li class="nav-item"><a class="nav-link" href="#item-1-2" id="item-1-2-tab" data-toggle="tab" role="tab" aria-controls="item-1-2" aria-selected="false" style="color:#7e3ca6;">Module Information</a></li>
                <li class="nav-item"><a class="nav-link" href="#item-1-3" id="item-1-3-tab" data-toggle="tab" role="tab" aria-controls="item-1-3" aria-selected="false" style="color:#7e3ca6;">Student Services</a></li>
            </ul>
        </div>
        <div class="card-body">
            <div id="nav-tabContent" class="tab-content">
                <div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab"> <!-- Staff Information -->
                    <h4><i class="fa fa-user"></i> Mr Derek Summers <?php echo $courseLectuer; ?></h4>
                    <p style="color:#000000;"><i class="icon ion-email"></i> Email <?php echo $emailaddd; ?> </p>
                    <p style="color:#000000;"><i class="icon ion-ios-location"></i> Office Location <?php echo $department; ?> </p>
                    <p style="color:#000000;"><i class="icon ion-ios-telephone"></i> Phone Number <?php echo $telno; ?> </p>
                    <div id="item-1-1" class="tab-pane fade show" role="tabpanel" aria-labelledby="item-1-1-tab">
                        <h4><i class="fa fa-user"></i> Mrs Gillian Douglas <?php echo $courseLectuer; ?></h4>
                        <p style="color:#000000;"><i class="icon ion-email"></i> Email <?php echo $emailaddd; ?> </p>
                        <p style="color:#000000;"><i class="icon ion-ios-location"></i> Office Location <?php echo $department; ?> </p>
                        <p style="color:#000000;"><i class="icon ion-ios-telephone"></i> Phone Number <?php echo $telno; ?> </p>
                    </div>
                    <div id="item-1-1" class="tab-pane fade show" role="tabpanel" aria-labelledby="item-1-1-tab">
                        <h4><i class="fa fa-user"></i> Mr Ian Turnbull <?php echo $courseLectuer; ?></h4>
                        <p style="color:#000000;"><i class="icon ion-email"></i> Email <?php echo $emailaddd; ?> </p>
                        <p style="color:#000000;"><i class="icon ion-ios-location"></i> Office Location <?php echo $department; ?> </p>
                        <p style="color:#000000;"><i class="icon ion-ios-telephone"></i> Phone Number <?php echo $telno; ?> </p>
                    </div>
                </div>

                <div id="item-1-2" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-2-tab"> <!-- Module Information -->
                    <h4><i class="icon ion-information-circled"></i> Module Information</h4>
                    <p style="color:#000000;"><i class="fa fa-user"></i> Module Leader <?php echo $courseLectuer; ?> </p>
                    <p style="color:#000000;"><i class="icon ion-ios-information"></i> Course Name <?php echo $courseName; ?> </p>
                    <p style="color:#000000;"><i class="icon ion-ios-location"></i> Department <?php echo $departmentName; ?> </p>
                </div>
                <div
                    id="item-1-3" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-3-tab"> <!-- Student Services Information -->
                    <h4><i class="icon ion-android-chat icon"></i> Student Services</h4>
                    <p style="color:#000000;"><i class="icon ion-ios-telephone"></i> Contact Number <?php echo $departmentTelNo; ?> </p>
                    <p style="color:#000000;"><i class="icon ion-email"></i> Email <?php echo $departmentEmailAddd; ?> </p>
                </div>
        </div>
    </div>
    </div>

    <div class="testimonials-clean"></div>
    <div data-aos="fade-right" data-aos-once="true" class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100" data-aos-once="true" style="font-family:'Source Sans Pro', sans-serif;">Questions about your student funding?</h2>
            </div>
            <div class="buttons"><a class="btn btn-light" role="button" href="account/login.php" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200" data-aos-once="true" style="font-family:'Source Sans Pro', sans-serif;background-color:#7e3ca6;color:#ffffff;">CHAT NOW</a></div>
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
                            <li><a href="../../info/opening-times.php">Opening Times</a></li>
                            <li><a href="../../info/how-to-find-us/php" style="color:#ffffff;">How To Find Us</a></li>
                            <li><a href="../../info/sitemap.php">Sitemap</a></li>
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
    <script src="../../assets/js/script.min.js"></script>
    <script src="../../dist/js/jqBootstrapValidation.js"></script>
    <!-- <script src="../dist/js/login.js"></script> -->
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
    <script src="../dist/js/cookies.js"></script>



    </body>
    </html>
