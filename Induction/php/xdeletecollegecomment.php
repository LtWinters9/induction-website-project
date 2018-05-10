<?php
session_start();
require_once('../php/functions.php');
require_once('../php/db_config.php');
$username=checkUser($_SESSION['userid'],session_id(),2);
$currentuser=getUserLevel();
$comment=$_POST['commentid'];
if(!$comment) { header("location: ../index.php"); }

$db=createConnection();
// get the article to delete
$sql = "select mbcid,users.userid from mainblogcom join users on mainblogcom.userid = users.userid where mbcid=?";
$stmt = $db->prepare($sql);
$stmt->bind_param("i",$comment);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($mbcid,$userid);
if($stmt->num_rows==1) {
    $stmt->fetch();
    //delete article from database
    if($currentuser['userlevel']>2 || ($currentuser['userid']==$userid && $currentuser['userlevel']>1)) {
        $deletesql="delete from mainblogcom where mbcid=?;";
        $deletestmt=$db->prepare($deletesql);
        $deletestmt->bind_param("i",$comment);
        $deletestmt->execute();
    }

}
$stmt->close();
$deletestmt->close();
$db->close();
header("location: ../blog/collegeblog.php");
?>
