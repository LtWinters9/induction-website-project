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

<?php if($currentuser['userlevel']<1) {
    include "../includes/banner.html";
} ?>

<?php if($currentuser['userlevel']>1) {
    include "../includes/banner.html";
} ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Appointment | UHI Induction Services</title>

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


  <?php if($currentuser['userlevel']==2) {
    include "../includes/navLevel2.php";
} ?>

  <?php if($currentuser['userlevel']==3) {
    include "../includes/navLevel3.php";
} ?>

  <?php

if(isset($_POST['userid'])) {
    $userid2=$_POST['userid'];
    $db=createConnection();
    $userdetailssql="select forename, surname, addressline1, addressline2, town, postcode, telephone, mobilephone, usertype from users where userid=?;";
    $userdetails = $db->prepare($userdetailssql);
    $userdetails->bind_param("s",$userid2);
    $userdetails->execute();
    $userdetails->store_result();
    $userdetails->bind_result($forename, $surname, $addressline1, $addressline2, $town, $postcode, $telephone, $mobilephone , $usertype);
    if($userdetails->num_rows==1) {
        $userdetails->fetch();
        ?>
    <div class="container profile profile-view" id="profile">
      <div class="row">
        <div class="col-md-12 alert-col relative">
          <!-- Not needed <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div> -->
        </div>
      </div>
      <form class="form-edit-details" data-toggle="validator" role="form" id="edituser" name="edituser" method="post" action="../php/updateDetails.php" autocomplete="off">
        <div class="form-row profile-row">
          <div class="col-md-4 relative">
          </div>
          <div class="col-md-8">
            <h1>Edit user details</h1>
            <hr>
            <div class="form-row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group"><label>User No </label><input class="form-control" type="text" name="userid" autocomplete="off" value="<?php echo $userid2; ?>" id="userid"></div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="sel1">User Level:</label>
                <select class="form-control" id="usertype">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
               </select>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group"><label>Forename </label><input class="form-control" type="text" name="forename" autocomplete="off" value="<?php echo $forename; ?>" id="forname"></div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group"><label>Surname </label><input class="form-control" type="text" name="surname" autocomplete="off" value="<?php echo $surname; ?>" id="surname"></div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group"><label>Address Line 1 </label><input class="form-control" type="text" name="addressline1" autocomplete="off" value="<?php echo $addressline1; ?>" id="addressline1"></div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group"><label>Address Line 2</label><input class="form-control" type="text" name="addressline2" autocomplete="off" value="<?php echo $addressline2; ?>" id="addressline2"></div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group"><label>Town</label><input class="form-control" type="text" name="town" autocomplete="off" value="<?php echo $town; ?>" id="town"></div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group"><label>Postcode</label><input class="form-control" type="text" name="postcode" autocomplete="off" maxlength="10" onkeydown="upperCaseF(this)" value="<?php echo $postcode; ?>" id="postcode"></div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group"><label>Telephone</label><input class="form-control" type="tel" name="telephone" autocomplete="off" maxlength="15" onkeypress="return isNumberKey(event)" value="<?php echo $telephone; ?>" id="telephone"></div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group"><label>Mobile</label><input class="form-control" type="tel" name="mobilephone" autocomplete="off" maxlength="15" onkeypress="return isNumberKey(event)" value="<?php echo $mobilephone; ?>" id="mobilephone"></div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group"><label>New Password </label><input class="form-control" type="password" name="inputPassword" autocomplete="off" id="inputPassword"></div>
              </div>
              <hr>
              <div class="form-row">
                <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit">UPDATE</button><a class="btn btn-danger form-btn" role="button" href="../account/updateuserselect" type="reset">CANCEL</a></div>
              </div>
            </div>
          </div>
      </form>
      <?php

  } else {
        echo "<p>No user found!</p>";
    }
} else {
    echo "<p>No user submitted to edit</p>";
}
?>

        <div class="testimonials-clean"></div>
        <div data-aos="fade-right" data-aos-once="true" class="highlight-clean">
          <div class="container">
            <div class="intro">
              <h2 class="text-center" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100" data-aos-once="true" style="font-family:'Roboto Condensed', sans-serif;">Questions about your student experience?</h2>
            </div>
            <div class="buttons"><a class="btn btn-light" role="button" href="../account/login" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200" data-aos-once="true" style="font-family:'Roboto Condensed', sans-serif;background-color:#7e3ca6;color:#ffffff;">CHAT NOW</a></div>
          </div>
        </div>
        <?php if($currentuser['userlevel']>1) {
    include "../includes/footer.php";
} ?>
        </div>

        <script src="../dist/scripts/inductioncorejs.js"></script>


</body>

</html>
