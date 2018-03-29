<?php
session_start();
require_once('../php/functions.php');
require_once('../php/db_config.php');
$username=checkUser($_SESSION['userid'],session_id(),2);
$currentuser=getUserLevel();
$article=$_POST['articleid'];
if(!$article) { header("location: ../index.php"); }

$db=createConnection();
// get the first two articles
$sql = "select blogid,userid from blogarticleassessment2 join assessment2 on blogposter = userid where blogid=?";
$stmt = $db->prepare($sql);
$stmt->bind_param("i",$article);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($articleid,$userid);
if($stmt->num_rows==1) {
    $stmt->fetch();
    if($currentuser['userlevel']>2 || ($currentuser['userid']==$userid && $currentuser['userlevel']>1)) {
        $deletesql="delete from blogarticleassessment2 where blogid=?;";
        $deletestmt=$db->prepare($deletesql);
        $deletestmt->bind_param("i",$article);
        $deletestmt->execute();
    }

}
$stmt->close();
$deletestmt->close();
$db->close();
header("location: ../index.php");
?>
