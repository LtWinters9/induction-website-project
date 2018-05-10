<?php
session_start();
require_once('../php/functions.php');
require_once('../php/db_config.php');
$currentuser=getUserLevel();
$userid = checkUser($_SESSION['userid'], session_id(), 2, 3);
$collegeid = $_SESSION['collegeid'];
$courseid = $_SESSION['courseid'];

$db=createConnection();

// add college blog to database
$articletitle=$_POST['articletitle'];
$articletext=$_POST['articletext'];
$insertblogsql="insert into courseblog (title,blogtext,blogposter,courseid,collegeid) values (?,?,?,?,?)";
$insertblog=$db->prepare($insertblogsql);
$insertblog->bind_param("ssiss",$articletitle,$articletext,$userid,$courseid,$collegeid);
$insertblog->execute();
$insertblog->close();
$db->close();
//back to blog page
header("location: ../blog/courseblog.php");
?>
