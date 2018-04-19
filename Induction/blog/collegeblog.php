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
$userid = checkUser($_SESSION['userid'], session_id(), 2, 3);
?>

<!DOCTYPE html>
<html lang="en">

<?php if ($currentuser['userlevel'] > 1) {
    include "../includes/banner.html";
} ?>


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
</head>

<body>
  <div id=header>



<?php if ($currentuser['userlevel'] > 1) {
    include "../includes/navLevel2.php";
} ?>

<div></div>
<ol class="breadcrumb">
 <li class="breadcrumb-item"><a><span>Forum </span></a></li>
 <li class="breadcrumb-item"><a><span>College Blog</span></a></li>
 <li class="breadcrumb-item"><a><span><?php echo $blogtitle; ?></span></a></li>
</ol>

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
    ?>. Welcome to the student blog, <?php echo $forename; ?></h2>
    <p class="lead text-center text-dark" style="font-family:'Roboto Condensed', sans-serif;">Below are the current discussions for <?php echo $blogtitle; ?> You should get involved!</p>
  </div>
</div>

  <aside>
  <h2>Add an Blog?</h2>

  <a href="addcollegearticle.php">Add a blog entry</a>
  </aside>

<section id="main">
    <?php
    $db = createConnection();
    // get the first two articles
    $sql = "select mainblogid,mainblog.title,blogtext,blogtime,blogposter,forename,userid from mainblog join users on blogposter = userid and mainblog.collegeid = '$collegeid' order by blogtime desc limit 4";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($mainblogid, $title, $blogtext, $blogtime, $blogposter, $forename, $userid);


    $cmntsql = "select mbcid,commenttext,mainblogcom.blogtime,mainblogcom.userid, forename from mainblogcom, users where mainblogcom.mainblogid=? and mainblogcom.userid = users.userid;";
    $cmnt = $db->prepare($cmntsql);
    $cmnt->bind_param("i", $mainblogid);
    $cmnt->bind_result($mbcid, $commenttext, $commenttime, $comuserid, $comforename);

    $cmnt->execute();
    $cmnt->store_result();

    while ($stmt->fetch()) {
        echo "<article id='a$mainblogid' class='blog-item' class='pull-left img-responsive'>
      <div class='text'>
        <h3>$title</h3>
        <p>" . nl2br($blogtext) . "</p>
        <p>Posted on <time datetime='$blogtime'>$blogtime</time> by <em>$forename</em></p>";

        if ($currentuser['userlevel'] > 2 || ($currentuser['userid'] == $userid && $currentuser['userlevel'] > 1)) {
            echo "<p><a href='deletecollegearticle.php?aID=$mainblogid' id='db$mainblogid'>Delete Post</a></p>";
        };
        if ($currentuser['userlevel'] > 1) {
            echo "<p><a href='addcollegecomment.php?aID=$mainblogid' id='db$mainblogid'>Add Comment</a></p>";

        };
        echo "<h3>Comments</h3>
      </div>
      <div class='clearfix'></div>
    </article>";

    }
/*
    //build article html
    while ($stmt->fetch()) {
        echo "<article id='a$mainblogid'>
      <h1>$title</h1>
      <p>" . nl2br($blogtext) . "</p>
      <footer><p>Posted on <time datetime='$blogtime'>$blogtime</time> by <em>$forename</em></p></footer>";
    }

        // if user is logged in and not suspended add comment button
        if ($currentuser['userlevel'] > 2 || ($currentuser['userid'] == $userid && $currentuser['userlevel'] > 1)) {
            echo "<p><a href='deletecollegearticle.php?aID=$mainblogid' id='db$mainblogid'>Delete Post</a></p>";
        };
        if($currentuser['userlevel']>1) {
            echo "<p><a href='addcollegecomment.php?aID=$mainblogid' id='db$mainblogid'>Add Comment</a></p>";

        }

        echo "<h2>Comments</h2>";

        $cmnt->execute();
        $cmnt->store_result();

        while ($cmnt->fetch()) {

            echo "<aside id='c$mbcid'>
                <p>" . nl2br($commenttext) . "</p>
                <footer><p>Commented on $commenttime by <em>$comforename</em><p></footer>";

            if ($currentuser['userlevel'] > 2 || ($currentuser['userid'] == $comuserid && $currentuser['userlevel'] > 1)) {
                echo "<p><a href='deletecollegecomment.php?aID=$mainblogid&cID=$mbcid' id='db$mbcid'>Delete Comment</a></p>";
            };


            "</aside>";
        }
        echo "</article>";
    }*/


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


</body>
</html>
