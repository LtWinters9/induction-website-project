<?php
function createConnection() {
	$host="localhost";
	$user="msiDB";
	$userpass='dn9Qr3_C4Swgsyms';
	$schema="inductionDB";
	$conn = new mysqli($host,$user,$userpass,$schema);
	if(mysqli_connect_errno()) {
		echo "Sorry, could not connect to server. Please try again later.: ".mysqli_connect_errno();
		exit;
	}
	return $conn;
}

/*

$DB_host = "localhost";
$DB_user = "msiDB";
$DB_pass = "dn9Qr3_C4Swgsyms";
$DB_name = "inductionDB";
//Connect with database
 try
 {
     $DBcon = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
     echo "ERROR : ".$e->getMessage();
 }

?>
*/
