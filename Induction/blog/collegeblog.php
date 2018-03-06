<?php
setCookie("userintent","",(time+86400),"/~15011406");
session_start();
date_default_timezone_set('London/GMT');
require_once('../php/functions.php');
require_once('../php/db_config.php');
$currentuser=getUserLevel();
$userid=$_SESSION['userid'];
$forename=$_SESSION['forename'];
$surname=$_SESSION['surname'];
$collegeid=$_SESSION['collegeid'];
?>

<!DOCTYPE html>
<html lang="en">

<?php if($currentuser['userlevel']<1) {
 include "../includes/banner.html";
  } ?>

  <?php if($currentuser['userlevel']>1) {
   include "../includes/banner.html";
    } ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forums | UHI Induction Services/title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
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
    <link rel="icon" type="image/png" sizes="192x192"  href="../dist/favicons.ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../dist/favicons.ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../dist/favicons.ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../dist/favicons.ico/favicon-16x16.png">
    <link rel="manifest" href="../dist/favicons.ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../dist/favicons.ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Cookies -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>

</head>

<!-- Code is not displaying -- >

<body>
  <?php if($currentuser['userlevel']>1) {
    include "../includes/navLevel2.php";
     } ?>


    <div></div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a><span>Forums </span></a></li>
        <li class="breadcrumb-item"><a><span>General Discussions</span></a></li>
        <li class="breadcrumb-item"><a><span> </span></a></li>
    </ol>

    <div class="highlight-phone" style="background-color:#9da9ae;">
        <h3 class="text-left" style="background-position:center;font-family:'Source Sans Pro', sans-serif;">Main Category</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro">
                        <h2 style="font-family:'Source Sans Pro', sans-serif;"> <i class="fa fa-question"></i> Frequently asked questions</h2>
                        <p style="font-family:'Source Sans Pro', sans-serif;">Category information </p><a class="btn btn-primary" role="button" href="#" style="background-color:#7e3ca6;font-family:'Source Sans Pro', sans-serif;">View </a></div>
                </div>
                <div class="col-sm-4" style="background-image:url(&quot;../assets/img/logo.jpg&quot;);background-repeat:no-repeat;">
                    <div class="d-none d-md-block iphone-mockup"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="highlight-phone" style="background-color:#9da9ae;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro">
                        <h2 style="font-family:'Source Sans Pro', sans-serif;"><i class="icon ion-alert"></i> Important Changes</h2>
                        <p style="font-family:'Source Sans Pro', sans-serif;">Category information</p><a class="btn btn-primary" role="button" href="#" style="background-color:#7e3ca6;font-family:'Source Sans Pro', sans-serif;">View </a></div>
                </div>
                <div class="col-sm-4" style="background-repeat:no-repeat;background-image:url(&quot;../assets/img/logo.jpg&quot;);">
                    <div class="d-none d-md-block iphone-mockup"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="highlight-phone" style="background-color:#7d8285;">
        <h1 style="font-family:'Source Sans Pro', sans-serif;">Open Discussion</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro" style="font-family:'Source Sans Pro', sans-serif;">
                        <h2 style="font-family:'Source Sans Pro', sans-serif;"><i class="fa fa-star"></i> Blog system</h2>
                        <p>Message here</p><a class="btn btn-primary" role="button" href="#" style="background-color:#7e3ca6;font-family:'Source Sans Pro', sans-serif;">View </a></div>
                </div>
                <div class="col-sm-4" style="background-image:url(&quot;../assets/img/logo.jpg&quot;);background-repeat:no-repeat;">
                    <div class="d-none d-md-block iphone-mockup"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="highlight-phone" style="background-color:#7d8285;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro">
                        <h2 style="font-family:'Source Sans Pro', sans-serif;"><i class="fa fa-star"></i> Blog system</h2>
                        <p>Message here</p><a class="btn btn-primary" role="button" href="#" style="background-color:#7e3ca6;font-family:'Source Sans Pro', sans-serif;">View </a></div>
                </div>
                <div class="col-sm-4" style="background-image:url(&quot;../assets/img/logo.jpg&quot;);background-repeat:no-repeat;">
                    <div class="d-none d-md-block iphone-mockup"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark" style="background-color:#7e3ca6;">

      <div class="footer-dark" style="background-color:#7e3ca6;">
          <footer>
              <div class="container">
                  <div class="row">
                      <div class="col-md-6 item text">
                        <h3 class="text-uppercase" style="color:#ffffff;font-family:'Source Sans Pro', sans-serif;">The University of the Highlands and Islands</h3>
                        <p><a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"   target="_blank" style="color:#ffffff;">About</a>
                          • <a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"  target="_blank" style="color:#ffffff;">News and Events</a>
                          • <a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"  target="_blank" style="color:#ffffff;">Business and employers</a>
                          • <a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"  target="_blank" style="color:#ffffff;">Vacancies</a>
                          • <a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"  target="_blank" style="color:#ffffff;">Give to UHI</a>
                          • <a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"  target="_blank" style="color:#ffffff;">FOI</a>
                          • <a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"  target="_blank" style="color:#ffffff;">Cookies</a>
                          • <a href="https://www.uhi.ac.uk/en/cookies-terms-conditions/"  target="_blank" style="color:#ffffff;">Contact Us</a></p>
                      </div>
                      <div class="col-sm-4 col-md-3 item">
                          <h3 class="text-uppercase" style="color:#ffffff;font-family:'Source Sans Pro', sans-serif;">About UHI</h3>
                          <ul>
                              <li><a href="#" style="color:#ffffff;">Argyll College UHI </a></li>
                              <li><a href="#">Highland Theological College UHI </a></li>
                              <li><a href="#">Inverness College UHI </a></li>
                              <li><a href="https://www.lews.uhi.ac.uk/" target="_blank">Lews Castle College UHI</a> </li>
                              <li><a href="https://www.moray.uhi.ac.uk/" target="_blank">Moray College UHI</a> </li>
                              <li><a href="https://www.nafc.uhi.ac.uk/" target="_blank">NAFC Marine Centre UHI</a> </li>
                              <li><a href="https://www.northhighland.uhi.ac.uk/" target="_blank">North Highland College UHI</a> </li>
                              <li><a href="https://www.orkney.uhi.ac.uk/" target="_blank">Orkney College UHI</a> </li>
                          </ul>
                      </div>
                      <div class="col-sm-4 col-md-3 item">
                          <h3 class="text-uppercase" style="color:#ffffff;font-family:'Source Sans Pro', sans-serif;">Information </h3>
                          <ul>
                              <li><a href="https://www.uhi.ac.uk/en/" target="_blank">Perth College UHI </a></li>
                              <li><a href="../info/opening-times.php">Opening Times</a></li>
                              <li><a href="../info/how-to-find-us/php" style="color:#ffffff;">How To Find Us</a></li>
                              <li><a href="../info/sitemap.php">Sitemap</a></li>
                          </ul>
                      </div>
                      <div class="col-sm-4 col-md-12 col-xl-12 offset-xl-0 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
                  </div>
                  <p class="copyright" style="color:#ffffff;">© University of the Highlands and IslandsRegistered office: 12b Ness Walk, Inverness, Scotland, IV3 5SQ&nbsp; </p>
              </div>
          </footer>
      </div>

      <section id="main">
          <?php
          $db=createConnection();
          // get the first two articles
          $sql = "select blogid,articletitle,articletext,blogtime,blogposter,username,userid from ScotiaNews join ScotiaUser on blogposter = userid order by blogtime desc limit 2";

          $stmt = $db->prepare($sql);
      // Error here    $stmt->execute();
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
          document.onreadystatechange=function() {
              if(document.readyState=="complete") {
                  prepareMenu();
                  prepareArticle();
              }
          }
      </script>




</body>
</html>
