<?php
/*session_start();
date_default_timezone_set('London/GMT');
include("functions.php");
include('db_config.php');
$db = createConnection();
$currentuser=getUserLevel();
$blogpostdate=$_POST['blogpostdate'];
//$blogpostdate="2015-04-14 23:11:11";


// Get next blog article
$sql = "select mainblogid,mainblog.title,blogtext,blogtime,userposter,forename from mainblog join users on userposter=userid where blogtime<? order by blogtime desc limit 1";
$stmt = $db->prepare($sql);
$stmt->bind_param("s",$blogpostdate);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($mainblogid,$title,$blogtext,$blogtime,$userposter,$forename);
$stmt->fetch();

//construct article associative array, includes user array data
$json[]=array (
    'mainblogid' => $mainblogid,
    'title' => $title,
    'blogtext' => nl2br($blogtext),
    'blogtime' => $blogtime,
    'userposter' => $userposter,
    'forename' => $forename,
    'currentuser' => $currentuser
);
echo json_encode($json);
$stmt->close();
$db->close();
*/?>



<?php
session_start();
include("functions.php");
include('db_config.php');
$db = createConnection();
$currentuser=getUserLevel();

$blogpostdate=$_POST['blogpostdate'];
// Get next blog article
$sql = "select mainblogid,mainblog.title,blogtext,blogtime,blogposter,username from ScotiaNews join ScotiaUser on blogposter=userid where blogtime<? order by blogtime desc limit 1";
$stmt = $db->prepare($sql);
$stmt->bind_param("s",$blogpostdate);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($articleid,$articletitle,$articletext,$blogtime,$blogposter,$username);
$stmt->fetch();

//construct article associative array, includes user array data
$json[]=array (
    'articleid' => $articleid,
    'articletitle' => $articletitle,
    'articletext' => nl2br($articletext),
    'blogtime' => $blogtime,
    'blogposter' => $blogposter,
    'username' => $username,
    'currentuser' => $currentuser
);
echo json_encode($json);
$stmt->close();
$db->close();
?>
