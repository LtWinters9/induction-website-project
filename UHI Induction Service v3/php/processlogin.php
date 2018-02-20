<?php

/*
Although the session can be started later it is useful
to start it at the beginning of the page. The session must
be started on each page that is part of the members area
for the logins to function appropriately.
session_regenerate_id() is used to ensure a new sessionid
is created for each person on each visit to the login page
Sessions do NOT work on HTML pages, just php pages.
*/

session_start();
session_regenerate_id()
?>


<?php
include('functions.php');
//Check that both a user name and user password have been set

if(isset($_POST['username']) && isset($_POST['userpass'])){ 
	$db=createConnection();
	//Assign POSTed values to variables
	$username=$_POST['username'];
	$userpass=$_POST['userpass'];
	//Create query, note that parameters being passed in are represented by question marks
	$loginsql="select userid, userpass, salt, firstname, surname, postcode, emailadd, title, mobile, usertype from customers where username=?";
	$lgnstmt = $db->prepare($loginsql);
	//Bound parameters are defined by type, s = string, i = integer, d = double and b = blob
	$lgnstmt->bind_param("s",$username);
	//Run query
	$lgnstmt->execute();
	//Store Query Result
	$lgnstmt->store_result();
	//Bind returned row parameters in same order as they appear in query
	$lgnstmt->bind_result($userid,$hash,$salt,$firstname,$surname,$postcode,$emailadd,$title,$mobile,$usertype);
	//Valid login only if exactly one row returned, otherwise something iffy is going on
	if($lgnstmt->num_rows==1) {
		//Fetch the next (it should be only) row from the returned results
		$lgnstmt->fetch();
		$cyphertext=makeHash($userpass,$salt,50);
		$lgnstmt->close();
		if($cyphertext==$hash) {
			//Update user's record with session data
			$sessionsql="update customers set sessionid=? where userid=?";
			$sessionstmt=$db->prepare($sessionsql);
			$sessionstmt->bind_param("si",session_id(),$userid);
			$sessionstmt->execute();
			$sessionstmt->close();
			// Store logged in userid as session variable
			
			$_SESSION['userid']=$userid;
			$_SESSION['firstname']=$firstname;
			$_SESSION['surname']=$surname;
			$_SESSION['postcode']=$postcode;
			$_SESSION['emailadd']=$emailadd;
			$_SESSION['title']=$title;
			$_SESSION['mobile']=$mobile;
			if ($usertype==2) {
				header("location: ../account/myaccount.php");
				exit();
			} else if ($usertype==3) {
				header("location: ../account/admin.php");
				exit();
			} else {
				header("location: ../php/logout.php");
				exit();
			}
		} else {
		header("location: ../account/login.php");
		exit();
		}
	} else {
		header("location: ../account/login.php");
		exit();
	}
	$db->close();	
	
} else {
	header("location: ../index.php");
	exit();
}
?>
