<?php
setCookie("userintent","",(time+86400),"/~15011406");
session_start();
date_default_timezone_set('London/GMT');
include('../php/functions.php');
$currentuser=getUserLevel();
$userid=$_SESSION['userid'];
$forename=$_SESSION['forename'];
$surname=$_SESSION['surname'];
$collegeid=$_SESSION['collegeid'];



//$username=checkUser($_SESSION['userid'],session_id(),2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to your account, <?php echo $forename; ?>  | UHI Induction Services</title>
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
</head>

<body>
  <?php if($currentuser['userlevel']>1) { ?>
    <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button" style="background-color:#7e3ca6;">
        <div class="container"><a class="navbar-brand" href="../web/index.php"> <span style="color:#9da9ae;font-size:20px;"><img class="img-fluid" src="../assets/img/UHI_Logo_RGB_transparent_orig.png" alt="uhi-main-logo" style="color:#ffffff;width:140px;"> </span></a><button class="navbar-toggler" data-toggle="collapse"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav nav-right">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="https://www.uhi.ac.uk/en/" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">Current Students</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="javascript:location.reload()" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">My Account</a>
                        <div class="dropdown-menu" role="menu" style="background-color:#7e3ca6;"><a class="dropdown-item" role="presentation" href="../php/logout.php" style="color:#ffffff;background-color:#7e3ca6;">Logout </a>
                          <a class="dropdown-item" role="presentation" href="../contact/contact-student-services.php" style="color:#ffffff;background-color:#7e3ca6;">Student Services</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../account/logout.php" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">Staff </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">Alumni </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" data-bs-hover-animate="pulse" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">Gàidhlig </a></li>
                </ul>
                <p class="ml-auto navbar-text actions"> </p>
            </div>
        </div>
    </nav>
<?php } ?>

    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Hello. Welcome to your account, <?php echo $userid; ?></h2>
                <p class="lead text-center">Access the key areas quickly below.</p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item" data-aos="zoom-in-down" data-aos-duration="200" data-aos-delay="200" data-aos-once="true">
                    <div class="box"><i class="icon ion-chatbubbles icon" style="color:#7e3ca6;"></i>
                        <h3 class="name">Chatbot </h3>
                        <p class="description">Descriptive text within box, that them leads to an informational area. Icon subject to change..&nbsp;.</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div data-aos="zoom-in-down" data-aos-duration="300" data-aos-delay="300" data-aos-once="true" class="box"><i class="fa fa-file-zip-o icon" style="color:#7e3ca6;"></i>
                        <h3 class="name">Fourms and Guidance </h3>
                        <p class="description">Descriptive text within box, that them leads to an informational area. Icon subject to change..&nbsp;.</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div data-aos="zoom-in-down" data-aos-duration="400" data-aos-delay="400" data-aos-once="true" class="box"><i class="icon ion-images icon" style="color:#7e3ca6;"></i>
                        <h3 class="name">Tour the Campus </h3>
                        <p class="description">Descriptive text within box, that them leads to an informational area. Icon subject to change..</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div data-aos="zoom-in-down" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="box"><i class="icon ion-android-chat icon" style="color:#7e3ca6;"></i>
                        <h3 class="name">Chat to other Students </h3>
                        <p class="description">Descriptive text within box, that them leads to an informational area. Icon subject to change..&nbsp;.</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div data-aos="zoom-in-down" data-aos-duration="600" data-aos-delay="600" data-aos-once="true" class="box"><i class="material-icons icon" style="color:#7e3ca6;">contact_mail</i>
                        <h3 class="name">Contact us now </h3>
                        <p class="description">Descriptive text within box, that them leads to an informational area. Icon subject to change..</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div data-aos="zoom-in-down" data-aos-duration="700" data-aos-delay="700" data-aos-once="true" class="box"><i class="fa fa-users icon" style="color:#7e3ca6;"></i>
                        <h3 class="name">Meet our Lectuers </h3>
                        <p class="description">Descriptive text within box, that them leads to an informational area. Icon subject to change..&nbsp; </p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="highlight-clean" style="background-color:#dfe8ee;">
        <div class="container" data-aos="slide-right" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
            <div class="intro">
                <h2 class="text-center"><?php echo $StudentID; ?> Account Overview</h2>
                <p class="text-center">Need to change your password, or get in touch with our automated bot? </p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="../php/forgottenpassword.php" data-bs-hover-animate="pulse" style="background-color:#7e3ca6;">UPDATE PASSWORD</a>
            <a class="btn btn-light" role="button" href="https://landbot.io/u/H-26103-U8N9IIM4FGVTSVVP/index.html" target="_blank"  data-bs-hover-animate="pulse" style="background-color:#465765;color:#ffffff;">CHAT NOW</a></div>
        </div>
    </div>
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



  </body>
  </html>
