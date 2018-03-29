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
$userid = $_SESSION['userid'];

$salt=getSalt(16);
$cyphertext=makeHash($userpass,$salt,50);

    if(isset($_POST['inputPassword']) && trim($_POST['inputPassword'])!="") {
        $plaintext=$_POST['inputPassword'];
        //The following generates a salt which is 16 characters in length
        $salt=getSalt(16);
        //The following generates a hash using the plain text password, the salt and a work factor of 50
        $hash=makeHash($plaintext,$salt,50);
        //Now that salt and hash are generated they need stored to the table
        $updatepasssql="update userpass set userpass=?,salt=? where userid=?";
        $updatepass=$db->prepare($updatepasssql);
        $updatepass->bind_param("ssi",$hash,$salt,$userid);
        $updatepass->execute();
        $updatepass->close();
    }
    $db->close();
		header('Location: detailsUpdated.php');

} else {

    echo "<p>Some parameters are missing, cannot update database</p>";

}
?>
</body>
</html>
