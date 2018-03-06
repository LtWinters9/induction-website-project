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
    <title>Update Password | UHI Induction Services</title>
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
<div class id=updatePassword>

  <?php if($currentuser['userlevel']>1) {
    include "../includes/navLevel2.php";
     } ?>

  <!-- update Start --> <!--Email needs to be read only and changed to students email address -->
    <div class="login-card"><img src="../assets/img/logo.jpg" class="profile-img-card">
        <p class="profile-name-card"> </p>
        <input class="form-control" readonly="" type="text"  placeholder=" <?php echo $userid; ?> ">
        <form class="form-signin"  data-toggle="validator" role="form" method="post" action="../php/updatePassword.php" autocomplete="off">
          <span class="reauth-email"> </span>
          <input class="form-control" type="password" required="" autofocus"" placeholder="New Password" maxlength="20" id="inputPassword">
          <input class="form-control" type="password" required="" placeholder="Confirm New Password" maxlength="20" id="inputSecondPassword">
          <div class="checkbox">

          </div>
          <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" style="background-color:#7e3ca6;">Update Now</button>
          <a href="../account/myaccount.php" class="forgot-password">Return to My Account</a>
        </form>
     </div>
<!-- update End -->




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
  <script src="../dist/js/jqBootstrapValidation.js"></script>
  <!-- <script src="../dist/js/login.js"></script> -->
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="../dist/js/cookies.js"></script>



  </body>
  </html>
