<!doctype html>
<html lang="en-gb" dir="ltr">
<head>
</head>
<body>
<?php
include("functions.php");
include('db_config.php');



if(isset($_POST['userid2']) && isset($_POST['forename']) && isset($_POST['surname'])&& isset($_POST['usertype'])) {
    $db=createConnection();
    $userid2=$_POST['userid2'];
    $forename=$_POST['forename'];
    $surname=$_POST['surname'];
    $addressline1=$_POST['addressline1'];
    $addressline2=$_POST['addressline2'];
    $town=$_POST['town'];
    $postcode=$_POST['postcode'];
    $telephoneno=$_POST['telephoneno'];
    $mobileno=$_POST['mobileno'];
    $usertype=$_POST['usertype'];
    $updatesql="update users set forename=?,surname=?,addressline1=?,addressline2=?,town=?,postcode=?,telephone=?, mobilephone=? ,usertype=? where userid=?";
    $doupdate=$db->prepare($updatesql);
    $doupdate->bind_param("ssssssssis",$forename,$surname,$addressline1,$addressline2,$town,$postcode,$telephoneno, $mobileno, $usertype,$userid2);
    $doupdate->execute();
    $doupdate->close();

    //a salt is created and the hashed password along with the salt creates a secure password. The hashed password and the salt are stored in the password table

    if(isset($_POST['userpass']) && trim($_POST['userpass'])!="") {
        $plaintext=$_POST['userpass'];
        //The following generates a salt which is 16 characters in length
        $salt=getSalt(16);
        //The following generates a hash using the plain text password, the salt and a work factor of 50
        $hash=makeHash($plaintext,$salt,50);
        //Now that salt and hash are generated they need stored to the table
        $updatepasssql="update userpass set userpass=?, salt=? where userid=?";
        $updatepass=$db->prepare($updatepasssql);
        $updatepass->bind_param("ssi",$hash,$salt,$userid);
        $updatepass->execute();
        $updatepass->close();
    }
    $db->close();

//directed back to the userlist.php page after the script is run

    echo "<script>
alert('Changes have been made to the account');
window.location.href='../account/myaccount.php';
</script>";
} else {
    echo "<p>Some parameters are missing, cannot update database</p>";
}
?>
</body>
</html>