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
  <title>Update Password | UHI Induction Services</title>

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
  <div class id=updatePassword>

    <?php if($currentuser['userlevel']>1) {
    include "../includes/navLevel2.php";
     } ?>


    <div class="login-card"><img src="../assets/img/logo.jpg" class="profile-img-card">
      <p class="profile-name-card"> </p>
      <input class="form-control" readonly="" type="text" value=" <?php echo $userid; ?> ">
      <form class="form-signin" data-toggle="validator" role="form" method="post" action="../php/updatePassword.php" autocomplete="off">
        <span class="reauth-email"> </span>
        <input class="form-control" type="password" required="" placeholder="New Password" maxlength="20" id="inputPassword" name="inputPassword">
        <input class="form-control" type="password" required="" placeholder="Confirm New Password" maxlength="20" id="inputSecondPassword" name="inputSecondPassword">
        <div class="checkbox">

        </div>
        <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" style="background-color:#7e3ca6;">Update Now</button>
        <a href="../account/myaccount" class="forgot-password">Return to My Account</a>
      </form>
    </div><!-- update End -->


 <?php if($currentuser['userlevel']>1) {
 include "../includes/footer.php";
  } ?>


    <script src="../dist/scripts/inductioncorejs.js"></script>

</body>
</html>
