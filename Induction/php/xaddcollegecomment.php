<?php
session_start();
require_once('../php/functions.php');
require_once('../php/db_config.php');
$username=checkUser($_SESSION['userid'],session_id(),2);
$currentuser=getUserLevel();
$db=createConnection();
//inserting comment to database
$article=$_POST['articleid'];
$commenttext=$_POST['commenttext'];
$insertblogsql="insert into mainblogcom (commenttext,userid,mainblogid) values (?,?,?)";
$insertblog=$db->prepare($insertblogsql);
$insertblog->bind_param("sii",$commenttext,$currentuser['userid'],$article);
$insertblog->execute();
$insertblog->close();
$db->close();
//return to blog page
header("location: ../blog/collegeblog.php");
?>