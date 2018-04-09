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
  <!-- Site Information -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <?php if($currentuser['userlevel']>1) { ?>
  <title>Welcome,
    <?php echo $forename; ?> | UHI Induction Services</title>
  <?php } ?>

  <!-- bootstrap css libary -->
  <link rel="stylesheet" href="../dist/styles/main/css-main.css">
  <link rel="stylesheet" href="../dist/styles/includes/css-includes.css">
  

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
  <link rel="icon" type="image/png" sizes="192x192" href="../dist/favicons.ico/android-icon-192x192.png">
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
  <div id=index>
    <!-- Nav Bar -->
        <?php if($currentuser['userlevel']>1) {
         include "../includes/navLevel2.php";
          } ?>



    <!-- Navbar End-->
    <!-- Image Slider Start-->
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="jumbotron hero-nature carousel-hero" style="background-image:url(&quot;../assets/img/union.png&quot;);">
            <h1 class="hero-title">Welcome </h1>
            <p class="hero-subtitle">To University of the Highlands</p>
            <p><a class="btn btn-primary btn-lg hero-button" role="button" href="../info/about-us" style="color:#ffffff;background-color:#7e3ca6;">About us</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="jumbotron hero-photography carousel-hero" style="background-image:url(&quot;../assets/img/banner2.png&quot;);">
            <h1 class="hero-title">Contact Us </h1>
            <p class="hero-subtitle">Today </p>
            <p><a class="btn btn-primary btn-lg hero-button" role="button" href="../contact/contact-student-services" style="background-color:#7e3ca6;">Contact Student Services</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="jumbotron hero-technology carousel-hero" style="background-image:url(&quot;../assets/img/banner.jpg&quot;);">
            <h1 class="hero-title">Academy of Sport and Wellbeing </h1>
            <p class="hero-subtitle"> Perth College UHI </p>
            <p><a class="btn btn-primary btn-lg hero-button" role="button" href="../info/tour-the-campus" style="background-color:#7e3ca6;font-family:'Roboto Condensed', sans-serif;">Tour the campus </a></p>
          </div>
        </div>
      </div>
      <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
      <ol class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
        <li data-target="#carousel-1" data-slide-to="2"></li>
      </ol>
    </div>
    <!-- Image Slider End-->
    <!-- Main body features Start-->
    <div class="features-boxed">
      <div class="container">
        <div class="intro">
          <h2 class="text-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100" data-aos-once="true" style="font-family:'Roboto Condensed', sans-serif;">Welcome to the UHI Induction Service</h2>
          <p class="text-center" data-aos="fade-up" data-aos-duration="700" data-aos-delay="200" data-aos-once="true" style="font-family:'Roboto Condensed', sans-serif;"><strong>Nervous and have questions about your first day? Stress no more. With the UHI induction service, you can ask our chatbot about anything student related to help you with your first day at Perth UHI.&nbsp;</strong> </p>
          <h2 class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250" data-aos-once="true" style="color:#37434d;">The Induction Service Includes</h2>
        </div>
        <div class="row justify-content-center features">
            <div class="col-sm-6 col-md-5 col-lg-4 item" data-aos="zoom-in-down" data-aos-duration="200" data-aos-delay="200" data-aos-once="true">
                <div class="box"><i class="icon ion-chatbubbles icon" style="color:#37434d;"></i>
                    <h3 class="name" style="font-family:'Roboto Condensed', sans-serif;">Chatbot </h3>
                    <p class="text-center description" style="font-family:'Roboto Condensed', sans-serif;font-size:16px;">Chat with our bot now for any student releated questions. &nbsp;This may include payment dates, libary location,<br><strong>campus details and&nbsp;</strong>where to get that much needed coffee.</p><a href="#" class="learn-more"
                        style="font-family:'Roboto Condensed', sans-serif;">Ask a question»</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div data-aos="zoom-in-down" data-aos-duration="300" data-aos-delay="300" data-aos-once="true" class="box"><i class="fa fa-file-zip-o icon" style="color:#37434d;"></i>
                    <h3 class="name" style="font-family:'Roboto Condensed', sans-serif;">Forms and Guidance </h3>
                    <p class="text-center description" style="font-family:'Roboto Condensed', sans-serif;font-size:16px;">Browse though the files that are related to your current course. &nbsp;This will ensure you're ready for your first day, or stay ontop of your current course work with updates.</p><a href="#" class="learn-more" style="font-family:'Roboto Condensed', sans-serif;">Browse now »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div data-aos="zoom-in-down" data-aos-duration="400" data-aos-delay="400" data-aos-once="true" class="box"><i class="icon ion-images icon" style="color:#37434d;"></i>
                    <h3 class="name" style="font-family:'Roboto Condensed', sans-serif;">Tour the Campus </h3>
                    <p class="text-center description" style="font-family:'Roboto Condensed', sans-serif;font-size:16px;"><strong>Want to get a birds eye view of Perth UHI, or get to know your surroundings before you start? Click the link below to view our 360° of Perth UHI.&nbsp;</strong><br><br></p><a href="#" class="learn-more" style="font-family:'Roboto Condensed', sans-serif;">View now »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div data-aos="zoom-in-down" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="box"><i class="icon ion-android-chat icon" style="color:#37434d;"></i>
                    <h3 class="name" style="font-family:'Roboto Condensed', sans-serif;">Chat to other Students </h3>
                    <p class="description" style="font-family:'Roboto Condensed', sans-serif;font-size:16px;"><strong>Want to break the ice with your fellow students, or just generally want to get to know everyone before your first day? Great! click below now to get started.&nbsp;</strong><br><br></p><a href="#" class="learn-more" style="font-family:'Roboto Condensed', sans-serif;">Chat now »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div data-aos="zoom-in-down" data-aos-duration="600" data-aos-delay="600" data-aos-once="true" class="box"><i class="material-icons icon" style="color:#37434d;">contact_mail</i>
                    <h3 class="name" style="font-family:'Roboto Condensed', sans-serif;">Contact us now </h3>
                    <p class="description" style="font-family:'Roboto Condensed', sans-serif;font-size:16px;">Want to break the ice with your fellow students, or just generally want to get to know everyone before your first day? Great! click below now to get started.&nbsp;</p><a href="#" class="learn-more" style="font-family:'Roboto Condensed', sans-serif;">Contact now »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div data-aos="zoom-in-down" data-aos-duration="700" data-aos-delay="700" data-aos-once="true" class="box"><i class="fa fa-users icon" style="color:#37434d;"></i>
                    <h3 class="name" style="font-family:'Roboto Condensed', sans-serif;">Meet your Lectuers </h3>
                    <p class="description" style="font-family:'Roboto Condensed', sans-serif;font-size:16px;">Need to know how to get in touch with one of your lectuers, or simply want to know who they're before you start? Click now below to find out more information.</p><a href="#" class="learn-more" style="font-family:'Roboto Condensed', sans-serif;">Learn more »</a></div>
            </div>
        </div>
      </div>
    </div>
    <!-- Main body features End-->
    <!-- Questions container Start-->
    <div class="testimonials-clean"></div>
    <div data-aos="fade-right" data-aos-once="true" class="highlight-clean">
      <div class="container">
        <div class="intro">
          <h2 class="text-center" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100" data-aos-once="true" style="font-family:'Roboto Condensed', sans-serif;">Questions about your student funding?</h2>
        </div>
        <div class="buttons"><a class="btn btn-light" role="button" href="https://landbot.io/u/H-26103-U8N9IIM4FGVTSVVP/index.html" target="_blank" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200" data-aos-once="true" style="font-family:'Roboto Condensed', sans-serif;background-color:#37434d;color:#ffffff;">CHAT NOW</a></div>
      </div>
    </div>
    <div class="testimonials-clean"></div>
    <!-- Questions container End -->


        <?php if($currentuser['userlevel']>1) {
         include "../includes/footer.php";
          } ?>

</div>
    <script src="../dist/scripts/inductioncorejs.js"></script>
    <script src="../dist/js/functions.js"></script>


</body>
</html>
