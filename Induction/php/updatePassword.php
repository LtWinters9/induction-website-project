<?php
// page to update students password from forgottenpassword form

session_start();
date_default_timezone_set('London/GMT');
require_once("functions.php");
require_once('db_config.php');

$db=createConnection();
$userid=$_POST['userid'];
$userpass=$_POST['inputPassword'];

	if($currentuser['userlevel']<2 && $currentuser['userid'] != $_POST['userid']) {
		header("location: php/logout.php");
		exit();
	}
echo "connection created";

//Create query, note that parameters being passed in are represented by question marks
$loginsql="select userpass, salt, hash from userpass where userpass.userid=?";
$lgnstmt = $db->prepare($loginsql);
//Bound parameters are defined by type, s = string, i = integer, d = double and b = blob
$lgnstmt->bind_param("isss",$userid,$userpass,$hash,$salt);
//Run query
$lgnstmt->execute();
//Store Query Result
$lgnstmt->store_result();

//Bind returned row parameters in same order as they appear in query
$lgnstmt->bind_result($userpass,$salt,$hash);

//Valid login only if exactly one row returned, otherwise something iffy is going on
if($lgnstmt->num_rows()==1) {
    //Fetch the next (it should be only) row from the returned results
    $lgnstmt->fetch();
    $cyphertext=makeHash($userpass,$salt,50);
    $lgnstmt->close();
    if($cyphertext==$hash) {
        //Update user's record with session data
        $sessionsql="update userpass set sessionid=? where userid=?";
        $sessionstmt=$db->prepare($sessionsql);
        $sessionstmt->bind_param("si",session_id(),$studentid);
        $sessionstmt->execute();
        $sessionstmt->close();

}

$updatesql= 'UPDATE `userpass` SET `userpass` = \'?\', `hash` = \'?\', `salt` = \'?\' WHERE `userpass`.`userid` = \'?\'';
$updateP=$db->prepare($updatesql);
$updateP->bind_param("isss",$userid,$userpass,$hash,$salt);
$updateP->execute();
$updateP->close();

	if($currentuser['userlevel']>=2) {
			header("location: ../account/myaccount.php");
			exit();
	} else {
		header("location: php/logout.php");
			exit();

	}

} else {
	echo "<p>Can not update details, Please return.</p>";
}
  $db->close();
 ?>
