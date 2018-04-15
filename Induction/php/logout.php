<?php
session_start();
date_default_timezone_set('London/GMT');
require_once("functions.php");
require_once('db_config.php');
//The ampersand is used to assign a 'null' value if
//there is currently no userid session variable set
$userid=&$_SESSION['userid'];
$sessionid=session_id();
if(!is_null($userid)) {
	//To prevent hack attempts from logging people out with
	//legitimate logins both userid and session id must match
	//before it clears the sessionid
	$clearquery="update users set sessionid='' where userid=? and sessionid=?";
	$db=createConnection();
	$doclear=$db->prepare($clearquery);
	$doclear->bind_param("is",$userid,$sessionid);
	$doclear->execute();
	$doclear->close();
	$db->close();
}
// Unset the session variables then destroy the current session
session_unset();
session_destroy();

//header("location: ../web/index.php");
//header is left so student can return to home by clicking button on screen
// Change the return to home location to an URL. For example comp=server.uhi.ac.uk/~yournumber this stops geneal attacks and ensures correct landing page
?>

<!DOCTYPE html>
<html lang="en">

<?php if($currentuser['userlevel']<1) {
 include "../includes/banner.html";
  } ?>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout | UHI Induction Services</title>
		<!-- bootstrap css libary -->
    <link rel="stylesheet" href="../dist/styles/main/css-main.css">
    <link rel="stylesheet" href="../dist/styles/includes/css-includes.css">
		<link rel="stylesheet" href="../dist/css/logout.css">

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


</head>

<body>
	<?php if($currentuser['userlevel']<1) {
    include "../includes/navLevel1.php";
     } ?>

<div class="highlight-blue">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Logout </h2>
                <p class="text-center">You have been successfully logged out </p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="../account/login">Return to Login</a></div>
        </div>
    </div>

		<div class="testimonials-clean"></div>
		<div data-aos="fade-right" data-aos-once="true" class="highlight-clean">
				<div class="container">
						<div class="intro">
								<h2 class="text-center" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100" data-aos-once="true" style="font-family:'Roboto Condensed', sans-serif;">Questions about your student funding?</h2>
						</div>
						<div class="buttons"><a class="btn btn-light" role="button" href="account/login.php" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200" data-aos-once="true" style="font-family:'Roboto Condensed', sans-serif;background-color:#7e3ca6;color:#ffffff;">CHAT NOW</a></div>
				</div>
		</div>
		<div class="testimonials-clean"></div>

		<?php if($currentuser['userlevel']<1) {
		 include "../includes/footer.php";
			} ?>

			<?php if($currentuser['userlevel']>1) {
			 include "../includes/footer.php";
				} ?>



	<script src="../dist/scripts/inductioncorejs.js"></script>

</body>
</html>
