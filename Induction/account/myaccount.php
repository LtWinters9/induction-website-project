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
  <title>Welcome to your account,
    <?php echo $forename; ?> | UHI Induction Services</title>

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
</head>

<body>

  <?php if($currentuser['userlevel']>1) {
    include "../includes/navLevel2.php";
     } ?>

  <div class="features-boxed">
    <div class="container" style="font-family:'Roboto Condensed', sans-serif;">
      <div class="intro">
        <h2 class="text-center" style="font-family:'Roboto Condensed', sans-serif;">

                  <?php
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
      <?php if($currentuser['userlevel']>1) {
               include "../includes/center-features.php";
                } ?>
    </div>
  </div>
  <div class="highlight-clean" style="background-color:#dfe8ee;">
    <div class="container" data-aos="slide-right" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
      <div class="intro">
        <h2 class="text-center" style="font-family:'Roboto Condensed', sans-serif;">Account Overview</h2>
        <p class="text-center" style="font-family:'Roboto Condensed', sans-serif;">Need to change your password, edit your details or get in touch with our automated bot? </p>
      </div>
      <div class="buttons"><a class="btn btn-primary" role="button" href="../account/forgottenpassword" data-bs-hover-animate="pulse" style="background-color:#7e3ca6;font-family:'Roboto Condensed', sans-serif;">UPDATE PASSWORD</a><a class="btn btn-light" role="button" href="../account/personaldetails"
          data-bs-hover-animate="pulse" style="background-color:#7e3ca6;color:#ffffff;font-family:'Roboto Condensed', sans-serif;">UPDATE DETAILS</a><a class="btn btn-light" role="button" href="https://landbot.io/u/H-26103-U8N9IIM4FGVTSVVP/index.html" target="_blank"
          data-bs-hover-animate="pulse" style="background-color:#7e3ca6;color:#ffffff;font-family:'Roboto Condensed', sans-serif;">CHAT NOW</a><a class="btn btn-light" role="button" href="../php/logout" data-bs-hover-animate="pulse" style="background-color:#7e3ca6;color:#ffffff;font-family:'Roboto Condensed', sans-serif;">LOGOUT</a></div>
    </div>
  </div>

  <?php if($currentuser['userlevel']>1) {
       include "../includes/footer.php";
        } ?>

  <script src="../dist/scripts/inductioncorejs.js"></script>


</body>
</html>
