<html lang="en-gb" dir="ltr">
<head>Return</head>
<body>

<?php
session_start();
include("functions.php");
include("db_config.php");
$userid=$_SESSION['userid'];



	if(isset($userid)) {
	$db=createConnection();
	$forename=$_POST['forename'];
	$surname=$_POST['surname'];
	$addressline1=$_POST['addressline1'];
	$addressline2=$_POST['addressline1'];
	$town=$_POST['town'];
	$postcode=$_POST['postcpde'];
	$telephone=$_POST['telephone'];
	$mobilephone=$_POST['mobilephone'];

	$updatesql="update users set forename=?,surname=?,addressline1=?,addressline2=?,town=?,postcode=?,telephone=?, mobilephone=? where userid=?";
    $doupdate=$db->prepare($updatesql);
    $doupdate->bind_param("ssssssssi", $forename,$surname,$addressline1,$addressline2,$town,$postcode,$telephone, $mobilephone, $userid);
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
</body>
</html>
