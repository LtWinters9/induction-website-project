<?php
session_start();
date_default_timezone_set('London/GMT');
session_regenerate_id();
?>

<html lang="en-gb" dir="ltr">
<head>>Return</head>
<body>



<?php
require_once('functions.php');
require_once('db_config.php');

//Check that both a user name and user password have been set
if(isset($_POST['studentID']) && isset($_POST['inputPassword'])){
    $db=createConnection();
    //Assign POSTed values to variables
    $studentid=$_POST['studentID'];
    $userpass=$_POST['inputPassword'];

	//echo $studentid;
	//echo $userpass;


    //Create query, note that parameters being passed in are represented by question marks
    $loginsql="select userpass, salt, forename, surname, telephone, mobilephone, addressline1, addressline2, town, postcode, email, usertype, courseid, collegeid from users,userpass where users.userid=? and userpass.userid=?";
    $lgnstmt = $db->prepare($loginsql);
    //Bound parameters are defined by type, s = string, i = integer, d = double and b = blob
    $lgnstmt->bind_param("ii",$studentid,$studentid);
    //Run query
    $lgnstmt->execute();
    //Store Query Result
    $lgnstmt->store_result();

    //Bind returned row parameters in same order as they appear in query
    $lgnstmt->bind_result($hash,$salt,$forename,$surname, $telephone,$mobilephone,$addressline1,$addressline2,$town,$postcode,$email,$usertype,$courseid,$collegeid);

    //Valid login only if exactly one row returned, otherwise something iffy is going on
    if($lgnstmt->num_rows()==1) {
        //Fetch the next (it should be only) row from the returned results
        $lgnstmt->fetch();
        $cyphertext=makeHash($userpass,$salt,50);
        $lgnstmt->close();
        if($cyphertext==$hash) {
            //Update user's record with session data
            $sessionsql="update users set sessionid=? where userid=?";
            $sessionstmt=$db->prepare($sessionsql);
            $sessionstmt->bind_param("si",session_id(),$studentid);
            $sessionstmt->execute();
            $sessionstmt->close();
            // Store logged in userid as session variable
            $_SESSION['userid']=$studentid;
            $_SESSION['forename']=$forename;
            $_SESSION['surname']=$surname;
            $_SESSION['telephone']=$telephone;
            $_SESSION['mobilephone']=$mobilephone;
            $_SESSION['addressline1']=$addressline1;
            $_SESSION['addressline2']=$addressline2;
            $_SESSION['town']=$town;
            $_SESSION['postcode']=$postcode;
            $_SESSION['email']=$email;
            $_SESSION['courseid']=$courseid;
            $_SESSION['collegeid']=$collegeid;


            if($usertype>2) {
                header("location: ../account/staffarea");
                exit();
            }
            else {
                header("location: logout");
            }

            if($usertype>0) {
                header("location: ../web/index");
                exit();
            }

            else {
                header("location: logout");
            }


        } else {
            header("location: ../account/login");
            exit();
        }
    } else {
        header("location: ../account/login");
        exit();
    }
    $db->close();

} else {
    header("location: ../account/login");
    exit();
}

?>

</body>
</html>
