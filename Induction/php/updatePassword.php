<?php
// page to update students password from forgottenpassword form

session_start();
date_default_timezone_set('London/GMT');
require_once("functions.php");
require_once('db_config.php');

if(isset($userid)) {
$db=createConnection();
$userpass=$_POST['inputPassword'];
$secondpass=$_POST['inputSecondPassword'];

$salt=getSalt(16);
$cyphertext=makeHash($userpass,$salt,50);

	$updatesql="update userpass set userpass=?, salt=? where userpass.userid=?";
    $doupdate=$db->prepare($updatesql);
    $doupdate->bind_param("ssi", $userpass,$cyphertext,$userid);
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
