<?php
session_start();
include('php/functions.php');
$currentuser=getUserLevel();
?>

<!doctype html>
<html lang="en-gb" dir="ltr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!--[if (lte IE 8)&!(IEMobile)]>
    <script src="js/iefix.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ieold.css" />
    <![endif]-->


    <title>PR Security</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1000px)" href="css/wide.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 840px) and (max-width:999px)" href="css/medium.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 640px) and (max-width:839px)" href="css/medium_narrow.css" />
    <link rel="stylesheet" type="text/css" media="screen and (max-width:639px)" href="css/narrow.css" />
    <link rel="stylesheet" type="text/css" media="print" href="css/print.css" />


</head>
<body>
<header>

</header>


<section id="main">
    <?php
    $db=createConnection();
    // get the first two articles
    $sql = "select blogid,articletitle,articletext,blogtime,blogposter,username,userid from ScotiaNews join ScotiaUser on blogposter = userid order by blogtime desc limit 2";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($articleid,$articletitle,$articletext,$blogtime,$blogposter,$username,$userid);

    //build article html
    while($stmt->fetch()) {
        echo "<article id='a$articleid'>
			<h1>$articletitle</h1>
			<p>".nl2br($articletext)."</p>
			<footer><p>Posted on <time datetime='$blogtime'>$blogtime</time> by <em>$username</em></p></footer>";

        // if user is logged in and not suspended add comment button
        if($currentuser['userlevel']>2 || ($currentuser['userid']==$userid && $currentuser['userlevel']>1)) {
            echo "<p><a href='deletearticle.php?aID=$articleid' id='db$articleid'>Delete Post</a></p>";
        }
        echo "</article>
			";
    }
    $stmt->close();
    $db->close();

    ?>
</section>


</body>
<script src="js/functions.js"></script>
<script src="js/article.js"></script>
<script>
    document.onreadystatechange=function() {
        if(document.readyState=="complete") {
            prepareMenu();
            prepareArticle();
        }
    }
</script>

</html>