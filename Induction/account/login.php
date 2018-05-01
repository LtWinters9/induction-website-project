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
$telephone=$_SESSION['telephone'];
$addressline1=$_SESSION['addressline1'];
$town=$_SESSION['town'];
$postcode=$_SESSION['postcode'];
$email=$_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<?php if($currentuser['userlevel']<1) {
 include "../includes/banner.html";
  } ?>



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <title>Login | UHI Induction Services</title>

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
  <!-- Nav Bar -->
  <?php if($currentuser['userlevel']<1) {
  include "../includes/navLevel1.php";
   } ?>

  <?php if($currentuser['userlevel']>0) {
    header("location: ../web/index.php");
    } ?>

  <!-- Login Start -->
  <div class="login-card"><img src="../assets/img/logo.jpg" class="profile-img-card">
    <div class="error">
    <p class="profile-name-card"> </p>
    <form class="form-signin" data-toggle="validator" role="form" method="post" action="../php/processlogin.php" sleep(3); autocomplete="on">
      <span class="reauth-email"> </span>
      <input class="form-control" type="text" required="" placeholder="User number" autofocus="" name="studentID" id="studentID" data-error="invalid student number">
      <input class="form-control" type="password" required="" placeholder="Password" name="inputPassword" id="inputPassword" data-error="Password does not match">

      <div class="checkbox">
        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">Remember me</label></div>
      </div>
      <button class="btn btn-primary btn-block btn-lg btn-signin" id="signUp" type="submit" style="background-color:#7e3ca6;">Sign in</button>
    </form>
    <a href="../error_docs/maintenance.html" class="forgot-password">Forgot your password?</a>
    <?php
    if(isset($_SESSION['error'])) { echo '
      <div id="error">'.$_SESSION['error'].'</div>';
      unset($_SESSION['error']);
    }

    ?>

  </div>
</div>


  <?php if($currentuser['userlevel']<1) {
     include "../includes/footer.php";
      } ?>

  <?php if($currentuser['userlevel']>1) {
       include "../includes/footer.php";
        } ?>


  <script src="../dist/scripts/inductioncorejs.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>

</body>
</html>
