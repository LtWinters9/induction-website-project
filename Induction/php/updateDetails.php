<!doctype html>
<html lang="en-gb" dir="ltr">
<head>Return</head>
<body>
<?php
session_start();
include("functions.php");
include("db_config.php");
$currentuser=getUserLevel();
$userid=$_SESSION['userid'];
$forename=$_SESSION['forename'];
$surname=$_SESSION['surname'];
$collegeid=$_SESSION['collegeid'];
$telephone=$_SESSION['telephone'];
$mobilephone=$_SESSION['mobilephone'];
$addressline1=$_SESSION['addressline1'];
$addressline2=$_SESSION['addressline2'];
$town=$_SESSION['town'];
$postcode=$_SESSION['postcode'];


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
	$telephone=$_POST['telephone'];
	$mobilephone=$_POST['mobilephone'];
	$addressline1=$_POST['addressline1'];
	$addressline2=$_POST['addressline2'];
	$town=$_POST['town'];
	$postcode=$_POST['postcode'];

	$updatesql="update users set userid=?,forename=?,surname=?,telephone=?,mobilephone=?,addressline1=?,addressline2=?,town=?,postcode=? where userid=?";
	$doupdate=$db->prepare($updatesql);
	$doupdate->bind_param("sssiissss",$userid,$forename,$surname,$telephone,$mobilephone,$addressline1,$addressline2,$town,$postcode);
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
	echo "<p>Some parameters are missing, cannot update database</p>";
}
?>
</body>
</html>
