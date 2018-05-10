<?php
session_start();
require_once('../php/functions.php');
require_once('../php/db_config.php');
$username=checkUser($_SESSION['userid'],session_id(),2);
$currentuser=getUserLevel();
$article=$_POST['articleid'];
if(!$article) { header("location: ../index.php"); }

$db=createConnection();
// get the article to delete
$sql = "select courseblogid,users.userid from courseblog join users on blogposter = users.userid where courseblogid=?";
$stmt = $db->prepare($sql);
$stmt->bind_param("i",$article);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($articleid,$userid);
if($stmt->num_rows==1) {
    $stmt->fetch();
    //delete article
    if($currentuser['userlevel']>2 || ($currentuser['userid']==$userid && $currentuser['userlevel']>1)) {
        $deletesql="delete from courseblog where courseblogid=?;";
        $deletestmt=$db->prepare($deletesql);
        $deletestmt->bind_param("i",$article);
        $deletestmt->execute();
    }

}
$stmt->close();
$deletestmt->close();
$db->close();
header("location: ../blog/courseblog.php");
?>
