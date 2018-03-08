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
$userid=$_SESSION['userid'];
$username=checkUser($_SESSION['userid'],session_id(),2);
if(isset($_POST['userid']) && isset($_POST['forename']) && isset($_POST['surname']) && isset($_POST['addressline1']) && isset($_POST['addressline2'])
&& isset($_POST['town']) && isset($_POST['postcode'])  && isset($_POST['telephone']) && isset($_POST['mobilephone']) ) {
	if($currentuser['userlevel']<2 && $currentuser['userid'] != $_POST['userid']) {
		header("location: php/logout.php");
		exit();

	}
	$db=createConnection();
	$userid=$_POST['userid'];
	$forename=$_POST['forename'];
	$surname=$_POST['surname'];
	$telephone=$_POST['telephone'];
	$addressline1=$_POST['addressline1'];
	$addressline2=$_POST['addressline2'];
	$town=$_POST['town'];
	$postcode=$_POST['postcode'];
	$telephone=$_POST['telephone'];
	$mobilephone=$_POST['mobilephone'];
	$updatesql="update users set forename=?,surname=?,addressline1=?,addressline2=?,town=?,postcode=?,telephone=?,mobilephone=? where userid=?";
	$doupdate=$db->prepare($updatesql);
	$doupdate->bind_param("ssssssssi",$forename,$surname,$addressline1,$addressline2,$town,$postcode,$telephone,$mobilephone,$userid);
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
