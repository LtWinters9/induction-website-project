<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
<head>>Return</head>
<body>

<?php
session_start();
date_default_timezone_set('London/GMT');
require_once("functions.php");
require_once('db_config.php');
$currentuser=getUserLevel();
$staffid=$_SESSION['staffid'];
$staffname=checkUser($_SESSION['staffid'],session_id(),2);
if(isset($_POST['userid']) && isset($_POST['username']) && isset($_POST['firstname']) && isset($_POST['surname'])) {
	if($currentuser['userlevel']<3 && $currentuser['userid'] != $_POST['userid']) {
		header("location: php/logout.php");
		exit();

	}
	$db=createConnection();
	$userid=$_POST['userid'];
	$username=$_POST['username'];
	$firstname=$_POST['firstname'];
	$surname=$_POST['surname'];
	$updatesql="update users set forename=?,surname=?,telphone=?,mobilephone=?,addressline1=?,addressline2=?,town=?,postcode=? where userid=?";
	$doupdate=$db->prepare($updatesql);
	$doupdate->bind_param("ssssssssi",$forename,$surname, $telephone, $mobilephone, $addressline1, $addressline2, $town, $postcode,$userid);
	$doupdate->execute();
	$doupdate->close();
	$db->close();
	if($currentuser['userlevel']==2) {
			header("location: php/detailsUpdated.php ");
			exit();
	} else {
		header("location: php/logout.php ");
			exit();

	}

} else {
	echo "<p>Some parameters are missing, cannot update database</p>";
}
?>

</body>
</html>
