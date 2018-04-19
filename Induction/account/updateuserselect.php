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


<?php if($currentuser['userlevel']>1) {
    include "../includes/navLevel2.php";
} ?>

<Article>

    <?php
    $db=createConnection();
    $userlistsql="select userid, forename, surname from users;";
    $userlist = $db->prepare($userlistsql);
    $userlist->execute();
    $userlist->store_result();
    $userlist->bind_result($useridupdate,$forename, $surname);
    if($userlist->num_rows>0) {
        ?>
        <form id="listusers" name="listusers" method="post" action="edituser.php" />
        <fieldset><legend>Edit User</legend>
            <label for="userid">Select User to Edit </label><select name="userid" id="userid" required>
                <?php
                while($userlist->fetch()) {
                    echo "<option value='$useridupdate'> User ID: $useridupdate, Name: $forename, Surname: $surname </option>";
                }
                ?>
            </select>
            <div class="form-row text-center">
                <div class="col-md-12">
                    <button class="btn btn-primary  btn-lg btn-success" id="btnBookNow" type="submit" style="background-color:#7e3ca6;">Confirm booking</button>
                </div>
        </fieldset>
        </form>

        <?php
    } else {
        echo "<p>No users found!</p>";
    }

    ?>
</Article>






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