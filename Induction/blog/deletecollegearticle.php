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
<title>Forums | UHI Induction Services</title>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css">


<!-- bootstrap css libary -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
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

</head>
<body>
<header>
</header>
<nav>
    <div id="menubutton">Menu</div>
    <ul id="menu">
        <li><a href="index.php">Home</a></li>
        <?php if($currentuser['userlevel']>1) { ?>
            <li><a href="makeabooking.php">Make a Booking</a></li> <?php } ?>
        <?php if($currentuser['userlevel']<2) { ?>
            <li><a href="makeabookinglogin.php">Make a Booking</a></li> <?php } ?>
        <li><a href="services.php">Services</a></li>
        <li><a href="blog.php">News</a></li>
        <li><a href="contact.php">Contact Us</a></li>
    </ul>
</nav>

<h1>Delete Article</h1>

<div id="main">
    <?php
    $db=createConnection();
    // get the first two articles
    $sql = "select blogid,articletitle,articletext,blogtime,blogposter,username,userid from ScotiaNews join ScotiaUser on blogposter = userid where blogid=?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i",$article);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($articleid,$articletitle,$articletext,$blogtime,$blogposter,$username,$userid);

    //build article html
    while($stmt->fetch()) {
        echo "<article id='a$articleid'>
			<h3>$articletitle</h3>
			<p>".nl2br($articletext)."</p>
			<footer><p>Posted on <time datetime='$blogtime'>$blogtime</time> by <em>$username</em></p></footer>";


        if($currentuser['userlevel']>2 || ($currentuser['userid']==$userid && $currentuser['userlevel']>1)) {
            ?> <form method='post' action='php/xdeletearticle.php'>
                <input type="hidden" readonly value="<?php echo $article ?>" id="articleid" name="articleid" />
                <button type="submit">Confirm Delete</button>
            </form>
            <?php
        }
        echo "</article>";
    }
    $stmt->close();
    $db->close();

    ?>

    <footer>
        <span>Copyright &copy; Abla Cruises</span>
        <nav>
            <ul id="footernav">
                <?php if($currentuser['userlevel']==0) { ?>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="login.html">Login</a></li> <?php } ?>
                <?php if($currentuser['userlevel']==3) { ?>
                    <li><a href="admin.php">My Account</a></li> <?php } ?>
                <?php if($currentuser['userlevel']==2) { ?>
                    <li><a href="user.php">My Account</a></li> <?php } ?>
                <?php if($currentuser['userlevel']==1) { ?>
                    <li><a href="inactive.php">My Account</a></li> <?php } ?>
                <?php if($currentuser['userlevel']>0) { ?>
                    <li><a href="php/logout.php">Logout</a></li> <?php } ?>
            </ul>
        </nav>



    </footer>

</body>
<script src="js/functions.js"></script>

<script>
    document.onreadystatechange=function() {
        if(document.readyState=="complete") {
            prepareMenu();
        }
    }
</script>

</html>
