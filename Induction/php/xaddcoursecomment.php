<?php
session_start();
require_once('../php/functions.php');
require_once('../php/db_config.php');
$username=checkUser($_SESSION['userid'],session_id(),2);
$currentuser=getUserLevel();
$db=createConnection();
$article=$_POST['articleid'];
$commenttext=$_POST['commenttext'];
$insertblogsql="insert into courseblogcom (commenttext,userid,courseblogid) values (?,?,?)";
$insertblog=$db->prepare($insertblogsql);
$insertblog->bind_param("sii",$commenttext,$currentuser['userid'],$article);
$insertblog->execute();
$insertblog->close();
$db->close();
header("location: ../blog/courseblog.php");
?>