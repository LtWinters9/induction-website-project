<?php
setCookie("userintent","",(time+86400),"/~15011406");
session_start();
date_default_timezone_set('London/GMT');
require_once('../php/functions.php');
require_once('../php/db_config.php');

// Student
$currentuser=getUserLevel();
$userid=$_SESSION['userid'];
$forename=$_SESSION['forename'];
$surname=$_SESSION['surname'];
$modulename=$_SESSION['modulename'];
$collegeid=$_SESSION['collegeid'];
$userid=checkUser($_SESSION['userid'],session_id(),2);

// Staff
$modulename=$_POST['modulename'];
?>

  <!DOCTYPE html>
  <html lang="en">


  <?php if($currentuser['userlevel']>1) {
   include "../includes/banner.html";
    } ?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Information | UHI Induction Services</title>

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
          <li class="nav-item"><a class="nav-link" href="#item-1-4" id="item-1-4-tab" data-toggle="tab" role="tab" aria-controls="item-1-4" aria-selected="false" style="color:#7e3ca6;">File Downloads</a></li>
        </ul>
      </div>
      <div class="card-body">
        <div id="nav-tabContent" class="tab-content">
          <div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
            <!-- Staff Information -->
            <h4><i class="fa fa-user"></i> Mr Derek Summers <?php echo $courseLectuer; ?></h4>
            <p style="color:#000000;"><i class="icon ion-email"></i> Email
              <?php echo $emailaddd; ?> </p>
            <p style="color:#000000;"><i class="icon ion-ios-location"></i> Office Location
              <?php echo $department; ?> </p>
            <p style="color:#000000;"><i class="icon ion-ios-telephone"></i> Phone Number
              <?php echo $telno; ?> </p>
            <div id="item-1-1" class="tab-pane fade show" role="tabpanel" aria-labelledby="item-1-1-tab">
              <h4><i class="fa fa-user"></i> Mrs Gillian Douglas <?php echo $courseLectuer; ?></h4>
              <p style="color:#000000;"><i class="icon ion-email"></i> Email
                <?php echo $emailaddd; ?> </p>
              <p style="color:#000000;"><i class="icon ion-ios-location"></i> Office Location
                <?php echo $department; ?> </p>
              <p style="color:#000000;"><i class="icon ion-ios-telephone"></i> Phone Number
                <?php echo $telno; ?> </p>
            </div>
            <div id="item-1-1" class="tab-pane fade show" role="tabpanel" aria-labelledby="item-1-1-tab">
              <h4><i class="fa fa-user"></i> Mr Ian Turnbull <?php echo $courseLectuer; ?></h4>
              <p style="color:#000000;"><i class="icon ion-email"></i> Email
                <?php echo $emailaddd; ?> </p>
              <p style="color:#000000;"><i class="icon ion-ios-location"></i> Office Location
                <?php echo $department; ?> </p>
              <p style="color:#000000;"><i class="icon ion-ios-telephone"></i> Phone Number
                <?php echo $telno; ?> </p>
            </div>
          </div>

          <div id="item-1-2" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-2-tab">
            <!-- Module Information -->
            <h4><i class="icon ion-information-circled"></i> Module Information</h4>
            <p style="color:#000000;"><i class="fa fa-user"></i> Module Leader
              <?php echo $courseLectuer; ?> </p>
            <p style="color:#000000;"><i class="icon ion-ios-information"></i> Course Name
              <?php echo $courseName; ?> </p>
            <p style="color:#000000;"><i class="icon ion-ios-location"></i> Department
              <?php echo $departmentName; ?> </p>
          </div>
          <div id="item-1-3" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-3-tab">
            <!-- Student Services Information -->
            <h4><i class="icon ion-android-chat icon"></i> Student Services</h4>
            <p style="color:#000000;"><i class="icon ion-ios-telephone"></i> Contact Number
              <?php echo $departmentTelNo; ?> </p>
            <p style="color:#000000;"><i class="icon ion-email"></i> Email
              <?php echo $departmentEmailAddd; ?> </p>
          </div>
          <div id="item-1-4" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-4-tab">
            <!-- File Downloads -->
            <h4><i class="ion-android-cloud icon"></i> File Downloads</h4>
            <p style="color:#000000;"><i class="ion-android-cloud"></i> <a href="../php/processfile.php"> Cloud Computing (1MB)</a>
              <?php echo $modulename; ?> </p>
            <a href="../php/processfile.php"><p style="color:#000000;"><i class="ion-android-cloud"></i> Databases (1MB)</a>
              <?php echo $modulename; ?> </p>
            <p style="color:#000000;"><i class="ion-android-cloud"></i> Developing Web Based Applications (5MB)
              <?php echo $modulename; ?> </p>
            <p style="color:#000000;"><i class="ion-android-cloud"></i> Security Concepts (2MB)
              <?php echo $modulename; ?> </p>
              <p style="color:#000000;"><i class="ion-android-cloud"></i> Graded Unit - 1 (8MB)
              <?php echo $modulename; ?> </p>
          </div>
        </div>
      </div>
    </div>

    <?php if($currentuser['userlevel']>1) {
     include "../includes/slide-in.php";
      } ?>

    <?php if($currentuser['userlevel']>1) {
     include "../includes/footer.php";
      } ?>

    <script src="../dist/scripts/inductioncorejs.js"></script>



</body>
</html>
