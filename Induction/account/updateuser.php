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
        <form id="edituser" name="edituser" method="post" action="../php/edituserdetails.php">
            <fieldset><legend>Edit User</legend>
                <label for="userid">User ID : </label>
                <input name="userid" id="userid" type="text" size="4" readonly required value="<?php echo $userid2; ?>" /><br />
                <label for="forename">First Name : </label>
                <input name="forename" id="forename" type="text" size="10" required value="<?php echo $forename; ?>" /><br />
                <label for="surname">Surname : </label>
                <input name="surname" id="surname" type="text" size="10" required value="<?php echo $surname; ?>" /><br />
                <label for="addressline1">Address Line 1 : </label>
                <input name="addressline1" id="addressline1" type="text" size="20" required value="<?php echo $addressline1; ?>" /><br />
                <label for="addressline2">Address Line 2 : </label>
                <input name="addressline2" id="addressline2" type="text" size="20" value="<?php echo $addressline2; ?>" /><br />
                <label for="town">Town : </label>
                <input name="town" id="town" type="text" size="20" required value="<?php echo $town; ?>" /><br />
                <label for="postcode">Postcode : </label>
                <input name="postcode" id="postcode" type="text" size="20" required value="<?php echo $postcode; ?>" /><br />
                <label for="telephoneno">Telephone : </label>
                <input name="telephoneno" id="telephoneno" type="text" size="20" required value="<?php echo $telephone; ?>" /><br /><br />
                <label for="mobileno">Mobile : </label>
                <input name="mobileno" id="mobileno" type="text" size="20" required value="<?php echo $mobilephone; ?>" /><br /><br />
                <label for="userpass">Password : </label>
                <input name="userpass" id="userpass" type="password" size="10" /><br />
                <label for="usertype">Member Level : </label>
                <input name="usertype" id="usertype" type="number" min="0" max="3" size="10" required  value="<?php echo $usertype; ?>" /><br />
                <button type="submit">Edit User</button>
            </fieldset>
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