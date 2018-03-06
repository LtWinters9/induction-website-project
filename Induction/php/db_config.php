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
//Params passed in
//$usersessionid = user's id, $sessionid=session_id()
//$ptype = level of access required for current page 1,2 or 3
function checkUser($usersessionid,$sessionid,$ptype) {
	$dbchk = createConnection();
	$lookupsql="select usertype,sessionid,userid from users where userid=?";
	$lookup=$dbchk->prepare($lookupsql);
	$lookup->bind_param("i",$usersessionid);
	$lookup->execute();
	$lookup->store_result();
	$lookup->bind_result($utype,$storedsession,$uname);
	$lookup->fetch();
	if($lookup->num_rows==1) {
		$lookup->close();
		$dbchk->close();
		if($sessionid!=$storedsession || $storedsession=="" || $utype<$ptype) {
			header("location: ../php/logout.php");
		}
	} else {
		$lookup->close();
		$dbchk->close();
		header("location: ../php/logout.php");
	}
	return $uname;
}

function getUserLevel() {
	$utype=0;
	$uname="Anonymous";
	if($_SESSION['userid']!=null) {
		$sessionid=session_id();
		$usersessionid=$_SESSION['userid'];
		$dbchk = createConnection();
		$lookupsql="select usertype,sessionid from users where userid=?";
		$lookup=$dbchk->prepare($lookupsql);
		$lookup->bind_param("i",$usersessionid);
		$lookup->execute();
		$lookup->store_result();
		$lookup->bind_result($utype,$storedsession);
		$lookup->fetch();
		// Whilst no valid user should find themselves here these checks just
		// ensure that levels higher than what should be allowed are not passed
		// on to the user as this function will also be used on pages where
		// a login is not necessary. If we find ourselves here we clear the
		// userid session variable too as it should not be set.
		if($lookup->num_rows!=1 || $sessionid!=$storedsession || $storedsession=="") {
			$uname="Anonymous";
			$utype=0;
			$_SESSION['userid']="";
			$usersessionid=-1;
		}
		$lookup->close();
		$dbchk->close();
	}
	// Here is the associative or keyed array that is sent back to the original
	// page indicating the current users access rights
	$userinfo= Array(
		'userlevel' =>	$utype,
		'username'	=>	$uname,
		'userid'	=>	$usersessionid,

	);
	return $userinfo;
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
