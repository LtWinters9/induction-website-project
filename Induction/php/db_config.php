<?php

function createConnection() {
	$host="localhost";
	$user="induction_Conn";
	$userpass='ivtB35?CE7wcpwxm';
	$schema="inductionDB";
	$conn = new mysqli($host,$user,$userpass,$schema);
	if(mysqli_connect_errno()) {
		echo "Sorry, could not connect to server. Please try again later.: ".mysqli_connect_errno();
		exit;
	}
	return $conn;
}

?>
