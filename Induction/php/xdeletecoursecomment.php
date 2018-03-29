<?php
session_start();
require_once('../php/functions.php');
require_once('../php/db_config.php');
$username=checkUser($_SESSION['userid'],session_id(),2);
$currentuser=getUserLevel();
$comment=$_POST['commentid'];
if(!$comment) { header("location: ../index.php"); }

$db=createConnection();
// get the first two articles
$sql = "select cbcid,users.userid from courseblogcom join users on courseblogcom.userid = users.userid where cbcid=?";
$stmt = $db->prepare($sql);
$stmt->bind_param("i",$comment);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cbcid,$userid);
if($stmt->num_rows==1) {
    $stmt->fetch();
    if($currentuser['userlevel']>2 || ($currentuser['userid']==$userid && $currentuser['userlevel']>1)) {
        $deletesql="delete from courseblogcom where cbcid=?;";
        $deletestmt=$db->prepare($deletesql);
        $deletestmt->bind_param("i",$comment);
        $deletestmt->execute();
    }

}
$stmt->close();
$deletestmt->close();
$db->close();
header("location: ../blog/courseblog.php");
?>
