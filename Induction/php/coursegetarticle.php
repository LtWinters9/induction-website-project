<?php
session_start();
date_default_timezone_set('London/GMT');
include("functions.php");
include('db_config.php');
$db = createConnection();
$collegeid = $_SESSION['collegeid'];
$currentuser=getUserLevel();
$blogpostdate=$_POST['blogpostdate'];
//$blogpostdate="2015-04-14 23:11:11";


// Get next blog article
$sql = "select mainblogid,mainblog.title,blogtext,blogtime,blogposter,forename,userid from mainblog join users on blogposter = userid where blogtime<? and mainblog.collegeid = '$collegeid' order by blogtime desc limit 1";
$stmt = $db->prepare($sql);
$stmt->bind_param("s",$blogpostdate);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($mainblogid, $title, $blogtext, $blogtime, $blogposter, $forename, $userid);

$stmt->fetch();

//construct article associative array, includes user array data
$json[]=array (
    'mainblogid' => $mainblogid,
    'title' => $title,
    'blogtext' => nl2br($blogtext),
    'blogtime' => $blogtime,
    'forename' => $forename,
    'currentuser' => $currentuser
);
echo json_encode($json);
$stmt->close();
$db->close();
?>

