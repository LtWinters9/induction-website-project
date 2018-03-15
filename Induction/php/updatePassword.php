<?php
// page to update students password from forgottenpassword form

session_start();
date_default_timezone_set('London/GMT');
require_once("functions.php");
require_once('db_config.php');
$userid = $_SESSION['userid'];

if(isset($userid)) {
$db=createConnection();
$userpass=$_POST['inputPassword'];
$secondpass=$_POST['inputSecondPassword'];

$salt=getSalt(16);
$cyphertext=makeHash($userpass,$salt,50);

	$updatesql="UPDATE `userpass` SET `userpass` = '?', `salt` = '?' WHERE `userpass`.`passwordid` = ?;"
    $doupdate=$db->prepare($updatesql);
    $doupdate->bind_param("ssi",$userpass,$cyphertext,$passwordid);
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
