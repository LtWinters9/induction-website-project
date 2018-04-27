<?php
setCookie("userintent", "", (time + 86400), "/~15011406");
session_start();
date_default_timezone_set('London/GMT');
require_once('../php/functions.php');
require_once('../php/db_config.php');
$currentuser = getUserLevel();
$userid = $_SESSION['userid'];
$forename = $_SESSION['forename'];
$surname = $_SESSION['surname'];
$collegeid = $_SESSION['collegeid'];
$courseid = $_SESSION['courseid'];
$userid = checkUser($_SESSION['userid'], session_id(), 2, 3);
?>

<!DOCTYPE html>
<html lang="en">



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forums | UHI Induction Services</title>

<!-- bootstrap css libary -->
<link rel="stylesheet" href="../dist/styles/main/css-main.css">
<link rel="stylesheet" href="../dist/styles/includes/css-includes.css">

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="../dist/favicons.ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../dist/favicons.ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../dist/favicons.ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../dist/favicons.ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../dist/favicons.ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../dist/favicons.ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../dist/favicons.ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../dist/favicons.ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../dist/favicons.ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="../dist/favicons.ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../dist/favicons.ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../dist/favicons.ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../dist/favicons.ico/favicon-16x16.png">
<link rel="manifest" href="../dist/favicons.ico/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../dist/favicons.ico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- Cookies -->
<link rel="stylesheet" type="text/css"
      href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>

</head>
<style>
    div.a {
        text-indent: 50px;

    }

    div.b {
        margin:20px;
    }


    article.inset {
        width: 90%;
        border-top-style:double;
        border-bottom-style:double;
        padding-top:5px;
        padding-bottom:5px;
        border-top-color:purple;
        border-bottom-color:purple;
        border-top-width:8px;
        border-bottom-width:8px;
        border-left: 5px solid purple;
        border-right: 5px solid purple;
    }
    aside.leftline {
        border-left: 5px solid purple;
    }

</style>
<body>
  <div id=header>



      <?php if($currentuser['userlevel']==2) {
          include "../includes/navLevel2.php";
      } ?>

      <?php if($currentuser['userlevel']==3) {
          include "../includes/navLevel3.php";
      } ?>

<div></div>
<ol class="breadcrumb">
 <li class="breadcrumb-item"><a><span>Forum </span></a></li>
 <li class="breadcrumb-item"><a><span>Course Discussions</span></a></li>
 <li class="breadcrumb-item"><a><span><?php echo $blogtitle; ?></span></a></li>
</ol>

      <?php
      $db = createConnection();
      $coursesql = "select coursename from course where courseid='$courseid' ";
      $course = $db->prepare($coursesql);
      $course ->execute();
      $course ->store_result();
      $course ->bind_result($coursename);
      $course ->fetch();
      ?>

<div class="intro">
    <h2 class="text-center" style="font-family:'Roboto Condensed', sans-serif;"><?php

    $Hour = date('G');

    if ( $Hour >= 5 && $Hour <= 11 ) {
        echo "Good Morning";
    } else if ( $Hour >= 12 && $Hour <= 17 ) {
        echo "Good Afternoon";
    } else if ( $Hour >= 18 || $Hour <= 4 ) {
        echo "Good Evening";
    }
    ?>. Welcome to the course blog, <?php echo $forename; ?>. Chat with your course mates about <?php echo $coursename; ?>.</h2>
  </div>
</div>

  <aside>
      <h2 class="text-center"><a href="addcoursearticle.php">Click Here</a> to Add a Blog</h2>
  </aside>
  <div class="b">
<section id="main">
    <?php
    $db = createConnection();
    // get the first two articles
    $sql = "select courseblogid,courseblog.title,blogtext,blogtime,blogposter,forename,userid from courseblog join users on blogposter = userid and courseblog.collegeid = '$collegeid' and courseblog.courseid = '$courseid' order by blogtime desc limit 15";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($courseblogid, $title, $blogtext, $blogtime, $blogposter, $forename, $userid);


    $cmntsql = "select cbcid,commenttext,courseblogcom.blogtime,courseblogcom.userid, forename from courseblogcom, users where courseblogcom.courseblogid=? and courseblogcom.userid = users.userid";
    $cmnt = $db->prepare($cmntsql);
    $cmnt->bind_param("i", $courseblogid);
    $cmnt->bind_result($cbcid, $commenttext, $commenttime, $comuserid, $comforename);


    //build article html
    while ($stmt->fetch()) {
        echo "<article id='a$courseblogid' class='inset' class='pull-left img-responsive'>
        <div class='text'>
      <div class='articleonly'>
      <h3>$title</h3>
      <p style='color:#3d3d3d;'>" . nl2br($blogtext) . "</p>
      <p style='color:lightgray;'>Posted on <time datetime='$blogtime'>$blogtime</time> by <em>$forename</em></p>";

        // if user is logged in and not suspended add comment button
        if ($currentuser['userlevel'] > 2 || ($currentuser['userid'] == $userid && $currentuser['userlevel'] > 1)) {
            echo "<p><a href='deletecoursearticle.php?aID=$courseblogid' id='db$courseblogid'>Delete Post</a></p>";
        };

        if($currentuser['userlevel']>1) {
            echo "<p><a href='addcoursecomment.php?aID=$courseblogid' id='db$courseblogid'>Add Comment</a></p>";

        };

        echo" </div>
         <div class='a'>
        <h5>Comments</h5></div>";

        $cmnt->execute();
        $cmnt->store_result();

        while ($cmnt->fetch()) {
            echo" <div class='a'>";
            echo "<aside id='c$cbcid' class='leftline'>
                <p style='color:#3d3d3d;'>" . nl2br($commenttext) . "</p>
                <footer><p style='color:grey;'>Commented on $commenttime by <em>$comforename</em><p></footer>";

            if ($currentuser['userlevel'] > 2 || ($currentuser['userid'] == $comuserid && $currentuser['userlevel'] > 1)) {
                echo "<p><a href='deletecoursecomment.php?aID=$courseblogid&cID=$cbcid' id='db$cbcid'>Delete Comment</a></p>";
            };

            echo  "</aside>";
            echo "</div>";

        }
        echo "</div>
    </article>
   

    <br>";

    }


    $cmnt->close();
    $stmt->close();
    $db->close();

    ?>
</section>
      <?php if($currentuser['userlevel']>1) {
          include "../includes/slide-in.php";
      } ?>

      <?php if($currentuser['userlevel']>1) {
          include "../includes/footer.php";
      } ?>
</body>

<script src="../dist/scripts/inductioncorejs.js"></script>
<script src="../dist/js/functions.js"></script>
<script src="../dist/js/article.js"></script>

<script>
    document.onreadystatechange = function () {
        if (document.readyState == "complete") {
            prepareMenu();
            prepareArticle();
        }
    }
</script>





</html>
