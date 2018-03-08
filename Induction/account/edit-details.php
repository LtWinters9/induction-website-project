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
$addressline2=$_SESSION['addressline2'];
$town=$_SESSION['town'];
$postcode=$_SESSION['postcode'];
$telephone=$_SESSION['telephone'];
$mobilephone=$_SESSION['mobilephone'];
$email=$_SESSION['email'];
$username=checkUser($_SESSION['userid'],session_id(),2);

if(isset($_GET['uID'])) {
	$userid=$_GET['uID'];
	$db=createConnection();
	$userdetailssql="select forename, surname, telephone, mobilephone, addressline1, addressline2, town, postcode from users where userid=?;";
	$userdetails = $db->prepare($userdetailssql);
	$userdetails->bind_param("i",$userid);
	$userdetails->execute();
	$userdetails->store_result();
	$userdetails->bind_result($forename,$surname,$telephone,$mobilephone,$addressline1,$addressline2,$town,$postcode);
	if($userdetails->num_rows==1) {
	$userdetails->fetch();

}}
?>

<html lang="en">

  <?php if($currentuser['userlevel']>1) {
   include "../includes/banner.html";
    } ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, <?php echo $forename; ?> | Update Details | UHI Induction Services</title>
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
<div class id=updateDetails>


<?php if($currentuser['userlevel']>1) {
  include "../includes/navLevel2.php";
   } ?>

  <div class="container profile profile-view" id="profile">
    <div class="row">
      <div class="col-md-12 alert-col relative">
        <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
      </div>
    </div>
    <form class="form-edit-details"  data-toggle="validator" role="form" id="editDetails" name="editDetials" method="post" action="../php/updateDetails.php" autocomplete="off">
      <div class="form-row profile-row">
        <div class="col-md-4 relative">
          <div class="avatar">
            <div class="avatar-bg center"></div>
          </div><input type="file" class="form-control" name="avatar-file"></div>
        <div class="col-md-8">
          <h1>Edit Details</h1>
          <hr>
          <div class="form-row">
            <div class="col-sm-12 col-md-6">
              <div class="form-group"><label>Firstname </label><input class="form-control" type="text" name="forename" autocomplete="off" required=""  value="<?php echo $forename; ?>"  id="forename"></div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group"><label>Surname </label><input class="form-control" type="text" name="surname" autocomplete="off" required="" value="<?php echo $surname; ?>"  id="surname"></div>
            </div>
          </div>
          <div class="form-group"><label>Email </label><input class="form-control" readonly="" type="email" name="email" autocomplete="off" required="" value="<?php echo $email; ?>"  id="emailadd"></div>
          <div class="form-row">
            <div class="col-sm-12 col-md-6">
              <div class="form-group"><label>Address Line 1 </label><input class="form-control" type="text" name="address1" autocomplete="off" required="" value="<?php echo $addressline1; ?>" id="address1"></div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group"><label>Address Line 2</label><input class="form-control" type="text" name="address2" autocomplete="off" required="" value="<?php echo $addressline2; ?>"  id="address2"></div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group"><label>Town</label><input class="form-control" type="text" name="town" autocomplete="off" required="" value="<?php echo $town; ?>"  id="town"></div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group"><label>Postcode</label><input class="form-control" type="text" name="postcode" autocomplete="off" required=""  maxlength="10" onkeydown="upperCaseF(this)" value="<?php echo $postcode; ?>" id="postcode"></div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group"><label>Telephone</label><input class="form-control" type="tel" name="telephone" autocomplete="off" required=""  maxlength="15" onkeypress="return isNumberKey(event)" value="<?php echo $telephone; ?>"  id="telephone"></div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group"><label>Mobile</label><input class="form-control" type="tel" name="mobile" autocomplete="off" required="" maxlength="15" onkeypress="return isNumberKey(event)"  value="<?php echo $mobilephone; ?>"  id="mobile"></div>
            </div>
          </div>
          <hr>
          <div class="form-row">
            <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit">UPDATE</button><a class="btn btn-danger form-btn" role="button" href="../account/myaccount.php" type="reset">CANCEL</a></div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <?php if($currentuser['userlevel']>1) {
   include "../includes/footer.php";
    } ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
  <script src="../assets/js/script.min.js"></script>
  <script src="../dist/js/jqBootstrapValidation.js"></script>
  <!-- <script src="../dist/js/login.js"></script> -->
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="../dist/js/cookies.js"></script>
  <script src="../dist/js/functions.js"></script>

  </body>
  </html>
