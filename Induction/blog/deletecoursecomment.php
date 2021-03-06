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
$article=$_GET['aID'];
$comment=$_GET['cID'];
if(!$comment) { header("location: index.php"); }


if($currentuser['userlevel']<2) {
    header("location:	index.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<div id=header>



    <?php if($currentuser['userlevel']==2) {
        include "../includes/navLevel2.php";
    } ?>

    <?php if($currentuser['userlevel']==3) {
        include "../includes/navLevel3.php";
    } ?>

    <div>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forums | UHI Induction Services</title>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css">


        <!-- bootstrap css libary -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
        <link rel="stylesheet" href="../assets/css/styles.min.css">

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

        <style>
            div.b {
                margin:20px;
            }


            div.main {
                width: 50%;
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
                margin: auto;
            }
        </style>

        <body>


        <br />
        <h2 class="text-center">Delete Comment</h2>
        <br />
    <div class="b">
        <div id="main" class="main">
            <?php
            $db=createConnection();
            // get the comment to be deleted
            $cmntsql = "select cbcid,commenttext,courseblogcom.blogtime,courseblogcom.userid, forename from courseblogcom, users where courseblogcom.courseblogid=? and courseblogcom.userid = users.userid and cbcid=?;";
            $cmnt = $db->prepare($cmntsql);
            $cmnt->bind_param("ii", $article,$comment);
            $cmnt->execute();
            $cmnt->store_result();
            $cmnt->bind_result($cbcid, $commenttext, $commenttime, $comuserid, $comforename);

            //build article html
            while ($cmnt->fetch()) {

                echo "<article id='c$cbcid' class='inset'>
                <p style='color:#3d3d3d;'>" . nl2br($commenttext) . "</p>
                <footer><p style='color:lightgray;'>Commented on $commenttime by <em>$comforename</em><p></footer>
                </article>";
            }

            //check user is authorised to delete the article
            if($currentuser['userlevel']>2 || ($currentuser['userid']==$userid && $currentuser['userlevel']>1)) {
                ?> <form method='post' action='../php/xdeletecoursecomment.php'>
                    <input type="hidden" readonly value="<?php echo $comment ?>" id="commentid" name="commentid" />
                    <button type="submit">Confirm Delete</button>
                </form>
                <?php


            }
            $stmt->close();
            $db->close();

            ?>
        </div>
    </div>




            <?php if($currentuser['userlevel']>1) {
                include "../includes/slide-in.php";
            } ?>

            <?php if($currentuser['userlevel']>1) {
                include "../includes/footer.php";
            } ?>

        </body>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
            <script src="../assets/js/script.min.js"></script>
            <script src="../dist/js/jqBootstrapValidation.js"></script>
            <script src="../dist/js/functions.js"></script>
            <script src="../dist/js/article.js"></script>
            <!-- <script src="../dist/js/login.js"></script> -->
            <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
            <script src="../dist/js/cookies.js"></script>
            <script>
                document.onreadystatechange = function () {
                    if (document.readyState == "complete") {
                        prepareMenu();
                        prepareArticle();
                    }
                }
            </script>


</html>
