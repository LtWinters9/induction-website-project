<html lang="en-gb" dir="ltr">
<body>
	
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

	$updatesql= "UPDATE userpass SET userpass='$userpass',salt='$cyphertext' WHERE passwordid='$passwordid'";
    $doupdate=$db->prepare($updatesql);
    $doupdate->bind_param("ssi",$userpass,$cyphertext,$passwordid);
    $doupdate->execute();
    $doupdate->close();
		$db->close();
		header('Location: detailsUpdated.php');

} else {

    echo "<p>Some parameters are missing, cannot update database</p>";

}
?>
</body>
</html>
