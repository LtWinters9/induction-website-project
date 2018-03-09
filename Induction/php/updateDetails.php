<!doctype html>
<html lang="en-gb" dir="ltr">
<head>Return</head>
<body>
<?php
session_start();
include("functions.php");
include("db_config.php");
$currentuser=getUserLevel();
$userid=$_POST['userid'];
$forename=$_POST['forename'];
$surname=$_POST['surname'];
$addressline1=$_POST['addressline1'];
$addressline2=$_POST['addressline2'];
$town=$_POST['town'];
$postcode=$_POST['postcode'];
$telephone=$_POST['telephone'];
$mobilephone=$_POST['mobilephone'];


$userid=checkUser($_SESSION['userid'],session_id(),2);
if(isset($_POST['userid']) && isset($_POST['userid']) && isset($_POST['forename']) && isset($_POST['surname'])) {
	if($currentuser['userlevel']<3 && $currentuser['userid'] != $_POST['userid']) {
		header("location: php/logout.php");
		exit();

	}
	$db=createConnection();
	$userid=$_POST['userid'];
	$forename=$_POST['forename'];
	$surname=$_POST['surname'];
	$addressline1=$_POST['addressline1'];
	$addressline2=$_POST['addressline2'];
	$town=$_POST['town'];
	$postcode=$_POST['postcode'];
	$telephone=$_POST['telephone'];
	$mobilephone=$_POST['mobilephone'];

	$updatesql="UPDATE `users` SET `forename` = '?', `surname` = '?', `addressline1` = '?', `addressline2` = '?', `town` = '?', `postcode` = '?', `telephone` = '?', `mobilephone` = '?' WHERE `users`.`userid` = ? ";
	$doupdate=$db->prepare($updatesql);
	$doupdate->bind_param("ssssssisi",$userid,$forename,$surname,$addressline1,$addressline2,$town,$postcode,$town,$mobilephone);
	$doupdate->execute();
	$doupdate->close();
	$db->close();
	if($currentuser['userlevel']==2) {
			header("location: ../account/myaccount.php");
			exit();
	} else {
		header("location: php/logout.php");
			exit();

	}

} else {
	echo "<p>Can not connect to the server. Please try again later, or contact the webmaster.</p>";
}
?>
</body>
</html>
