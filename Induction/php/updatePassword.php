<?php
// page to update students password from forgottenpassword form

session_start();
date_default_timezone_set('London/GMT');
require_once("functions.php");
require_once('db_config.php');

$db=createConnection();
$userid=$_POST['userid'];
$userpass=$_POST['inputPassword'];

	if($currentuser['userlevel']<2 && $currentuser['userid'] != $_POST['userid']) {
		header("location: php/logout.php");
		exit();
	}
echo "connection created";
$loginsql="select userpass, salt from userpass where userid=?";
$cyphertext=makeHash($userpass,$salt,50);
if(isset($userid)) {
	$updatesql="update userpass set userpass=?, salt=?, hash=? where userid=?";
    $doupdate=$db->prepare($updatesql);
    $doupdate->bind_param("sssi", $userpass,$salt,$hash,$userid);
    $doupdate->execute();
    $doupdate->close();
    $db->close();

    echo "<script>
alert('The changes have been made to your account');
window.location.href='../account/myaccount.php';
</script>";

} else {

echo "<p>Some parameters are missing, cannot update database</p>";

}

 ?>
