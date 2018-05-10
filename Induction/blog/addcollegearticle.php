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


if($currentuser['userlevel']<2) {
    header("location:	index.php");
}

if(isset($_COOKIE['userintent'])) {
    if($currentuser['userlevel']==0 && $_COOKIE['userintent']=="addarticle") {
        header("location:	login.php");
        exit;
    }
}
$username=checkUser($_SESSION['userid'],session_id(),2);

?>
<!DOCTYPE html>
<html lang="en">

<?php if ($currentuser['userlevel'] > 1) {
    include "../includes/banner.html";
} ?>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add article | UHI Induction Services</title>


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

<!--manual CSS for the page -->

<style>
    div.main {
        width: 60%;
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
    div.b {
        margin:20px;
    }
    .left {
        width: 100px;
        float: left;
        text-align: right;
    }
    .right {
        width: 600px;
        margin-left: 10px;
        float:left;
    }
    button {
        background-color: purple; color: white;
        border-radius: 4px;
        padding: 12px 35px;
        font-size: 16px;
        display: inline-block;
    }

</style>

</head>

<body>

<div id=header>



    <?php if($currentuser['userlevel']==2) {
        include "../includes/navLevel2.php";
    } ?>

    <?php if($currentuser['userlevel']==3) {
        include "../includes/navLevel3.php";
    } ?>

<!--    Fields for adding new post-->

</div>
<h2 class="text-center">Add Post</h2>
<div class="b">
    <div class="main">
        <section id="main" class="main">

            <form method="post" action="../php/xaddcollegearticle.php">
                <fieldset><legend>Add New Article</legend>
                    <div class="left"><label for="articletitle">Title</label></div><div class="right"><input type="text" name="articletitle" id="articletitle" size="30" required /></div>
                    <br />
                    <br />
                    <div class="left"><label for="articletext">Body</label></div><div class="right"><textarea name="articletext" id="articletext" cols="60" rows="5"></textarea></div>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <div class="right"> <button type="submit">Add Post</button></div>
                </fieldset>
            </form>
        </section>
    </div>
</div>

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
