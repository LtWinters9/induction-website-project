<?php
session_start();
require_once('../php/functions.php');
require_once('../php/db_config.php');
$currentuser=getUserLevel();
$userid = checkUser($_SESSION['userid'], session_id(), 2, 3);
$collegeid = $_SESSION['collegeid'];
$userid = $_SESSION['userid'];
$db=createConnection();

$articletitle=$_POST['articletitle'];
$articletext=$_POST['articletext'];
$insertblogsql="insert into mainblog (title,blogtext,blogposter,collegeid) values (?,?,?,?)";
$insertblog=$db->prepare($insertblogsql);
$insertblog->bind_param("ssis",$articletitle,$articletext,$userid,$collegeid);
$insertblog->execute();
$insertblog->close();
$db->close();
header("location: ../blog/collegeblog.php");
?>
