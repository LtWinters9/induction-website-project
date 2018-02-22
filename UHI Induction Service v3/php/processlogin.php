
Author: David Ferguson
Page Name: processlogin.php
Description: Processes the login using the username and password provided on login.
Version 1
!-->




<?php

session_start();
session_regenerate_id();
?>
<!doctype html>
<html lang="en-gb" dir="ltr">
<head>
</head>
<body>
<?php
include('functions.php');

//Check that both a user name and user password have been set
if(isset($_POST['studentID']) && isset($_POST['inputPassword'])){
    $db=createConnection();
    //Assign POSTed values to variables
    $studentid=$_POST['studentID'];
    $userpass=$_POST['inputPassword'];

	echo $studentid;
	echo $userpass;


    //Create query, note that parameters being passed in are represented by question marks
    $loginsql="select userpass, salt, forename, surname, usertype from users,userpass where users.userid=? and userpass.userid=?";
    $lgnstmt = $db->prepare($loginsql);
    //Bound parameters are defined by type, s = string, i = integer, d = double and b = blob
    $lgnstmt->bind_param("ii",$studentid,$studentid);
    //Run query
    $lgnstmt->execute();
    //Store Query Result
    $lgnstmt->store_result();

    //Bind returned row parameters in same order as they appear in query
    $lgnstmt->bind_result($hash,$salt,$forename,$surname,$usertype);
//	if($lgnstmt->num_rows()==1) {
//		$lgnstmt->fetch();
//	}
//	echo "after";
//	echo $hash;
    //Valid login only if exactly one row returned, otherwise something iffy is going on
    if($lgnstmt->num_rows()==1) {
        //Fetch the next (it should be only) row from the returned results
        $lgnstmt->fetch();
        $cyphertext=makeHash($userpass,$salt,50);
        $lgnstmt->close();
        if($cyphertext==$hash) {
            //Update user's record with session data
            $sessionsql="update users set session_id=? where studentid=?";
            $sessionstmt=$db->prepare($sessionsql);
            $sessionstmt->bind_param("si",session_id(),$studentid);
            $sessionstmt->execute();
            $sessionstmt->close();
            // Store logged in userid as session variable
            $_SESSION['studentid']=$studentid;
            $_SESSION['forename']=$forename;
            if($usertype>0) {
                header("location: ../index.php");
                exit();
            }

            else {
                header("location: logout.php");
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
    header("location: ../account/login.php");
    exit();
}

?>

</body>
</html>
