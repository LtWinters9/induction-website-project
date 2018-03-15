<?php
// page to update students password from forgottenpassword form

session_start();
date_default_timezone_set('London/GMT');
require_once("functions.php");
require_once('db_config.php');
$userid=$_SESSION['userid'];


if(isset($userid)) {
$db=createConnection();
$userpass=$_POST['inputPassword'];

	$updatesql="update userpass set userpass=? where userid=?";
    $doupdate=$db->prepare($updatesql);
    $doupdate->bind_param("si", $userpass,$userid);
    $doupdate->execute();
    $doupdate->close();

    echo "<script>
alert('The changes have been made to your account');
window.location.href='../account/myaccount.php';
</script>";

} else {

echo "<p>Some parameters are missing, cannot update database</p>";

}

 ?>
