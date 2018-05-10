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
$modulename=$_SESSION['courseid'];
$collegeid=$_SESSION['collegeid'];
$userid=checkUser($_SESSION['userid'],session_id(),2);
?>

  <!DOCTYPE html>
  <html lang="en">


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
</head>

  <body>

    <?php if($currentuser['userlevel']==2) {
        include "../includes/navLevel2.php";
    } ?>

    <?php if($currentuser['userlevel']==3) {
        include "../includes/navLevel3.php";
    } ?>

    <div class="card">
      <div class="card-header">
        <header></header>
        <h3 class="text-center">Welcome to your Course, <?php echo $forename." ".$surname; ?>.</h3>
        <ul class="nav nav-tabs card-header-tabs" role="tablist">
          <li class="nav-item"><a class="nav-link active" href="#item-1-1" id="item-1-1-tab" data-toggle="tab" role="tab" aria-controls="item-1-1" aria-selected="true" style="color:#7e3ca6;">Staff Information</a></li>
          <li class="nav-item"><a class="nav-link" href="#item-1-3" id="item-1-3-tab" data-toggle="tab" role="tab" aria-controls="item-1-3" aria-selected="false" style="color:#7e3ca6;">Student Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#item-1-4" id="item-1-4-tab" data-toggle="tab" role="tab" aria-controls="item-1-4" aria-selected="false" style="color:#7e3ca6;">File Downloads</a></li>
        </ul>
      </div>




      <div class="card-body">
        <div id="nav-tabContent" class="tab-content">
          <div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
            <!-- Staff Information -->

              <?php
              $lecturer = 3;
              $db=createConnection();
              //Create query, note that parameters being passed in are represented by question marks
              $loginsql="select title, forename, surname, bio, email, telephone from users where users.usertype=? and users.courseid=?;";
              $lgnstmt = $db->prepare($loginsql);
              //Bound parameters are defined by type, s = string, i = integer, d = double and b = blob
              $lgnstmt->bind_param("is",$lecturer, $modulename);
              //Run query
              $lgnstmt->execute();
              //Store Query Result
              $lgnstmt->store_result();
              $lgnstmt->bind_result($title2, $forename2, $surname2, $bio2, $email2, $telephone);


              while($lgnstmt->fetch()) { ?>

              <h4><i class="fa fa-user"></i> <?php echo $title2. " " . $forename2. " " . $surname2; ?></h4>
              <p style="color:#000000;"><i class="icon ion-email"></i> Email
                  <?php echo $email2; ?> </p>
              <p style="color:#000000;"><i class="icon ion-ios-telephone"></i>
                  01738877000  </p>
              <p style="color:#000000;"></i> Bio:
                  <?php echo $bio2; ?> </p>
              <?php }	?>
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
            <p style="color:#000000;"><i class="ion-android-cloud"></i> <a href="https://drive.google.com/document/d/id=1WM4oRRc3caAv94R4-JkcYuY3GnNAJPhVCGzCACO9v-w">Cloud Computing (1MB)</a>
              <?php echo $modulename; ?> </p>
            <p style="color:#000000;"><i class="ion-android-cloud"></i> <a href="" target="_blank">Databases (1MB)</a>
              <?php echo $modulename; ?> </p>
            <p style="color:#000000;"><i class="ion-android-cloud"></i> <a href="" target="_blank">Developing Web Based Applications (5MB)</a>
              <?php echo $modulename; ?> </p>
            <p style="color:#000000;"><i class="ion-android-cloud"></i> <a href="" target="_blank">Security Concepts (2MB)</a>
              <?php echo $modulename; ?> </p>
              <p style="color:#000000;"><i class="ion-android-cloud"></i> <a href="" target="_blank">Graded Unit - 1 (8MB)</a>
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
