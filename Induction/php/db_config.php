<?php

function createConnection() {
	$host="comp-server.uhi.ac.uk";
	$user="pe15011406";
	$userpass='triple30';
	$schema="pe15011406";
	$conn = new mysqli($host,$user,$userpass,$schema);
	if(mysqli_connect_errno()) {
		echo "Sorry, could not connect to server. Please try again later.: ".mysqli_connect_errno();
		exit;
	}
	return $conn;
}

?>
