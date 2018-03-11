<?php
setCookie("userintent","",(time+86400),"/~15011406");
session_start();
date_default_timezone_set('London/GMT');
require_once('../php/functions.php');
require_once('../php/db_config.php');
$currentuser=getUserLevel();
$userid=$_SESSION['userid'];
$forename=$_SESSION['forename'];
$surname=$_SESSION['surname'];
$collegeid=$_SESSION['collegeid'];
$userid=checkUser($_SESSION['userid'],session_id(),2);
?>

<!DOCTYPE html>
<html lang="en">

<?php if($currentuser['userlevel']>1) {
   include "../includes/banner.html";
    } ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to your account, <?php echo $forename; ?>  | UHI Induction Services</title>

    <!-- bootstrap css libary -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">
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

  <?php if($currentuser['userlevel']>1) {
    include "../includes/navLevel2.php";
     } ?>

      <div class="features-boxed">
          <div class="container" style="font-family:'Roboto Condensed', sans-serif;">
              <div class="intro">
                  <h2 class="text-center" style="font-family:'Roboto Condensed', sans-serif;"><?php
                  // 24-hour format of an hour without leading zeros (0 through 23)
                  $Hour = date('G');

                  if ( $Hour >= 5 && $Hour <= 11 ) {
                      echo "Good Morning";
                  } else if ( $Hour >= 12 && $Hour <= 17 ) {
                      echo "Good Afternoon";
                  } else if ( $Hour >= 18 || $Hour <= 4 ) {
                      echo "Good Evening";
                  }
                  ?>. Welcome to your account, <?php echo $forename; ?></h2>
                  <p class="lead text-center text-dark" style="font-family:'Roboto Condensed', sans-serif;">Access the key areas of your account quickly below.</p>
              </div>
              <div class="row justify-content-center features">
                  <div class="col-sm-6 col-md-5 col-lg-4 item" data-aos="zoom-in-down" data-aos-duration="200" data-aos-delay="200" data-aos-once="true">
                      <div class="box"><i class="icon ion-chatbubbles icon" style="color:#7e3ca6;"></i>
                          <h3 class="name" style="font-family:'Roboto Condensed', sans-serif;">Chatbot </h3>
                          <p class="text-center description" style="font-family:'Roboto Condensed', sans-serif;font-size:16px;">Chat with our bot now for any student releated questions. &nbsp;This may include payment dates, libary location,<br><strong>campus details and&nbsp;</strong>where to get that much needed coffee.</p><a href="#" class="learn-more"
                              style="font-family:'Roboto Condensed', sans-serif;">Ask a question»</a></div>
                  </div>
                  <div class="col-sm-6 col-md-5 col-lg-4 item">
                      <div data-aos="zoom-in-down" data-aos-duration="300" data-aos-delay="300" data-aos-once="true" class="box"><i class="fa fa-file-zip-o icon" style="color:#7e3ca6;"></i>
                          <h3 class="name" style="font-family:'Roboto Condensed', sans-serif;">Fourms and Guidance </h3>
                          <p class="text-center description" style="font-family:'Roboto Condensed', sans-serif;font-size:16px;">Browse though the files that are related to your current course. &nbsp;This will ensure you're ready for your first day, or stay ontop of your current course work with updates.</p><a href="#" class="learn-more" style="font-family:'Roboto Condensed', sans-serif;">Browse now »</a></div>
                  </div>
                  <div class="col-sm-6 col-md-5 col-lg-4 item">
                      <div data-aos="zoom-in-down" data-aos-duration="400" data-aos-delay="400" data-aos-once="true" class="box"><i class="icon ion-images icon" style="color:#7e3ca6;"></i>
                          <h3 class="name" style="font-family:'Roboto Condensed', sans-serif;">Tour the Campus </h3>
                          <p class="text-center description" style="font-family:'Roboto Condensed', sans-serif;font-size:16px;"><strong>Want to get a birds eye view of Perth UHI, or get to know your surroundings before you start? Click the link below to view our 360° of Perth UHI.&nbsp;</strong><br><br></p><a href="#" class="learn-more" style="font-family:'Roboto Condensed', sans-serif;">View now »</a></div>
                  </div>
                  <div class="col-sm-6 col-md-5 col-lg-4 item">
                      <div data-aos="zoom-in-down" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="box"><i class="icon ion-android-chat icon" style="color:#7e3ca6;"></i>
                          <h3 class="name" style="font-family:'Roboto Condensed', sans-serif;">Chat to other Students </h3>
                          <p class="description" style="font-family:'Roboto Condensed', sans-serif;font-size:16px;"><strong>Want to break the ice with your fellow students, or just generally want to get to know everyone before your first day? Great! click below now to get started.&nbsp;</strong><br><br></p><a href="#" class="learn-more" style="font-family:'Roboto Condensed', sans-serif;">Chat now »</a></div>
                  </div>
                  <div class="col-sm-6 col-md-5 col-lg-4 item">
                      <div data-aos="zoom-in-down" data-aos-duration="600" data-aos-delay="600" data-aos-once="true" class="box"><i class="material-icons icon" style="color:#7e3ca6;">contact_mail</i>
                          <h3 class="name" style="font-family:'Roboto Condensed', sans-serif;">Contact us now </h3>
                          <p class="description" style="font-family:'Roboto Condensed', sans-serif;font-size:16px;">Want to break the ice with your fellow students, or just generally want to get to know everyone before your first day? Great! click below now to get started.&nbsp;</p><a href="#" class="learn-more" style="font-family:'Roboto Condensed', sans-serif;">Contact now »</a></div>
                  </div>
                  <div class="col-sm-6 col-md-5 col-lg-4 item">
                      <div data-aos="zoom-in-down" data-aos-duration="700" data-aos-delay="700" data-aos-once="true" class="box"><i class="fa fa-users icon" style="color:#7e3ca6;"></i>
                          <h3 class="name" style="font-family:'Roboto Condensed', sans-serif;">Meet your Lectuers </h3>
                          <p class="description" style="font-family:'Roboto Condensed', sans-serif;font-size:16px;">Need to know how to get in touch with one of your lectuers, or simply want to know who they're beofre you start? Click now below to find out more information.</p><a href="#" class="learn-more" style="font-family:'Roboto Condensed', sans-serif;">Learn more »</a></div>
                  </div>
              </div>
          </div>
      </div>
      <div class="highlight-clean" style="background-color:#dfe8ee;">
          <div class="container" data-aos="slide-right" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
              <div class="intro">
                  <h2 class="text-center" style="font-family:'Roboto Condensed', sans-serif;">Account Overview</h2>
                  <p class="text-center" style="font-family:'Roboto Condensed', sans-serif;">Need to change your password, or get in touch with our automated bot? </p>
              </div>
              <div class="buttons"><a class="btn btn-primary" role="button" href="account/personaldetails.php" data-bs-hover-animate="pulse" style="background-color:#7e3ca6;font-family:'Roboto Condensed', sans-serif;">UPDATE PASSWORD</a><a class="btn btn-light" role="button"
                      href="account/personaldetails.php" data-bs-hover-animate="pulse" style="background-color:#7e3ca6;color:#ffffff;font-family:'Roboto Condensed', sans-serif;">UPDATE DETAILS</a><a class="btn btn-light" role="button"
                      href="https://landbot.io/u/H-26103-U8N9IIM4FGVTSVVP/index.html" data-bs-hover-animate="pulse" style="background-color:#7e3ca6;color:#ffffff;font-family:'Roboto Condensed', sans-serif;">CHAT NOW</a><a class="btn btn-light" role="button"
                      href="../php/logout.php" data-bs-hover-animate="pulse" style="background-color:#7e3ca6;color:#ffffff;font-family:'Roboto Condensed', sans-serif;">LOGOUT</a></div>
          </div>
      </div>

      <?php if($currentuser['userlevel']>1) {
       include "../includes/footer.php";
        } ?>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
      <script src="../assets/js/script.min.js"></script>
  </body>

  </html>
