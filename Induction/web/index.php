<?php
setCookie("userintent","",(time+86400),"/~15011406");
session_start();
include('../php/functions.php');
$currentuser=getUserLevel();
$userid=$_SESSION['userid'];
$forename=$_SESSION['forename'];
$surname=$_SESSION['surname'];
$collegeid=$_SESSION['collegeid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Site Information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if($currentuser['userlevel']<1) { ?>
    <title>UHI Induction Services</title>
    <?php } ?>

    <?php if($currentuser['userlevel']>1) { ?>
    <title>Welcome, <?php echo $forename; ?> | UHI Induction Services</title>
    <?php } ?>

    <!-- bootstrap css libary -->
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
</head>

<body>
    <div id=index>
      <!-- Navbar Start-->
      <?php if($currentuser['userlevel']<1) { ?>
      <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button" style="background-color:#7e3ca6;">
          <div class="container"><a class="navbar-brand" href="index.php"> <span style="color:#9da9ae;font-size:20px;"><img class="img-fluid" src="../assets/img/UHI_Logo_RGB_transparent_orig.png" alt="uhi-main-logo" style="color:#ffffff;width:140px;"> </span></a><button class="navbar-toggler" data-toggle="collapse"
                  data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navcol-1">
                  <ul class="nav navbar-nav nav-right">
                      <li class="nav-item" role="presentation"><a class="nav-link" href="https://www.uhi.ac.uk/en/" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">Current Students</a></li>
                      <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="javascript:location.reload()" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">My Account</a>
                          <div class="dropdown-menu" role="menu" style="background-color:#7e3ca6;"><a class="dropdown-item" role="presentation" href="../account/login.php" style="color:#ffffff;background-color:#7e3ca6;">Login </a>
                            <a class="dropdown-item" role="presentation" href="../contact/contact-student-services.php" style="color:#ffffff;background-color:#7e3ca6;">Contact Us</a></div>
                      </li>
                      <li class="nav-item" role="presentation"><a class="nav-link" href="../account/logout.php" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">Staff </a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">Alumni </a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" href="#" data-bs-hover-animate="pulse" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">Gàidhlig </a></li>
                  </ul>
                  <p class="ml-auto navbar-text actions"> </p>
              </div>
          </div>
      </nav>
<?php } ?>


<!-- Navbar Start-->
<?php if($currentuser['userlevel']>1) { ?>
  <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button" style="background-color:#7e3ca6;">
      <div class="container"><a class="navbar-brand" href="index.php"> <span style="color:#9da9ae;font-size:20px;"><img class="img-fluid" src="../assets/img/UHI_Logo_RGB_transparent_orig.png" alt="uhi-main-logo" style="color:#ffffff;width:140px;"> </span></a><button class="navbar-toggler" data-toggle="collapse"
              data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navcol-1">
              <ul class="nav navbar-nav nav-right">
                  <li class="nav-item" role="presentation"><a class="nav-link" href="https://www.uhi.ac.uk/en/" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">Current Students</a></li>
                  <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="javascript:location.reload()" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">My Account</a>
                      <div class="dropdown-menu" role="menu" style="background-color:#7e3ca6;"><a class="dropdown-item" role="presentation" href="../account/myaccount.php" style="color:#ffffff;background-color:#7e3ca6;">Account Overview </a>
                        <a class="dropdown-item" role="presentation" href="../contact/contact-student-services.php" style="color:#ffffff;background-color:#7e3ca6;">Student Services</a>

                      </div>
                  </li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="../account/logout.php" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">Staff </a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">Alumni </a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#" data-bs-hover-animate="pulse" style="font-family:'Source Sans Pro', sans-serif;color:#ffffff;">Gàidhlig </a></li>
              </ul>
              <p class="ml-auto navbar-text actions"> </p>
          </div>
      </div>
  </nav>
<?php } ?>



   <!-- Navbar End-->
   <!-- Image Slider Start-->
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="jumbotron hero-nature carousel-hero" style="background-image:url(&quot;../assets/img/union.png&quot;);">
                    <h1 class="hero-title">Welcome </h1>
                    <p class="hero-subtitle">To University of the Highlands</p>
                    <p><a class="btn btn-primary btn-lg hero-button" role="button" href="info/about-us.php" style="color:#ffffff;background-color:#7e3ca6;">About us</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="jumbotron hero-photography carousel-hero" style="background-image:url(&quot;../assets/img/banner2.png&quot;);">
                    <h1 class="hero-title">Contact Us </h1>
                    <p class="hero-subtitle">Today </p>
                    <p><a class="btn btn-primary btn-lg hero-button" role="button" href=contact/contact-student-services.php style="background-color:#7e3ca6;">Contact Student Services</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="jumbotron hero-technology carousel-hero" style="background-image:url(&quot;../assets/img/banner.jpg&quot;);">
                    <h1 class="hero-title">Academy of Sport and Wellbeing </h1>
                    <p class="hero-subtitle"> Perth College UHI </p>
                    <p><a class="btn btn-primary btn-lg hero-button" role="button" href="info/tour-the-campus.php" style="background-color:#7e3ca6;font-family:'Source Sans Pro', sans-serif;">Tour the campus </a></p>
                </div>
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
    </div>
    <!-- Image Slider End-->
    <!-- Main body features Start-->
    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100" data-aos-once="true" style="font-family:'Source Sans Pro', sans-serif;">Welcome to the UHI Induction Service</h2>
                <p class="text-center" data-aos="fade-up" data-aos-duration="700" data-aos-delay="200" data-aos-once="true" style="font-family:'Source Sans Pro', sans-serif;"><strong>Nervous about your first day? Have questions about your first day? stress no more. With the UHI induction service, you can ask our chatbot about anything student related to help you with your first day at Perth UHI.&nbsp;</strong>                    </p>
                <h2 class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250" data-aos-once="true" style="color:#37434d;">The Induction Service Includes</h2>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-md-4 item">
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="box"><i class="icon ion-chatbubbles icon" style="color:#37434d;"></i>
                        <h3 class="name" style="font-family:'Source Sans Pro', sans-serif;">Chatbot </h3>
                        <p class="description" style="font-family:'Source Sans Pro', sans-serif;">Descriptive text within box, that them leads to an informational area. Icon subject to change.. </p><a href="account/login.php" class="learn-more" style="font-family:'Source Sans Pro', sans-serif;">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="200" data-aos-once="true" class="box"><i class="fa fa-file-zip-o icon" style="color:#37434d;"></i>
                        <h3 class="name" style="font-family:'Source Sans Pro', sans-serif;">Fourms and Guidance</h3>
                        <p class="description" style="font-family:'Source Sans Pro', sans-serif;">Descriptive text within box, that them leads to an informational area. Icon subject to change..</p><a href="account/login.php" class="learn-more" style="font-family:'Source Sans Pro', sans-serif;">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="300" data-aos-once="true" class="box"><i class="icon ion-images icon" style="color:#37434d;"></i>
                        <h3 class="name" style="font-family:'Source Sans Pro', sans-serif;">Tour the Campus</h3>
                        <p class="description" style="font-family:'Source Sans Pro', sans-serif;">Descriptive text within box, that them leads to an informational area. Icon subject to change.. </p><a href="account/login.php" class="learn-more" style="font-family:'Source Sans Pro', sans-serif;">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" data-aos-once="true" class="box"><i class="icon ion-android-chat icon" style="color:#37434d;"></i>
                        <h3 class="name" style="font-family:'Source Sans Pro', sans-serif;">Chat to other Students</h3>
                        <p class="description" style="font-family:'Source Sans Pro', sans-serif;">Descriptive text within box, that them leads to an informational area. Icon subject to change..</p><a href="account/login.php" class="learn-more" style="font-family:'Source Sans Pro', sans-serif;">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <div data-aos="fade-up" data-aos-duration="900" data-aos-delay="500" data-aos-once="true" class="box"><i class="material-icons icon" style="color:#37434d;">contact_phone</i>
                        <h3 class="name" style="font-family:'Source Sans Pro', sans-serif;">Contact us now</h3>
                        <p class="description" style="font-family:'Source Sans Pro', sans-serif;">Descriptive text within box, that them leads to an informational area. Icon subject to change..</p><a href="account/login.php" class="learn-more" style="font-family:'Source Sans Pro', sans-serif;">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600" data-aos-once="true" class="box"><i class="fa fa-users icon" style="color:#37434d;"></i>
                        <h3 class="name" style="font-family:'Source Sans Pro', sans-serif;">Meet our Lectuers</h3>
                        <p class="description" style="font-family:'Source Sans Pro', sans-serif;">Descriptive text within box, that them leads to an informational area. Icon subject to change..</p><a href="account/login.php" class="learn-more" style="font-family:'Source Sans Pro', sans-serif;">Learn more »</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main body features End-->
    <!-- Questions container Start-->
    <div class="testimonials-clean"></div>
    <div data-aos="fade-right" data-aos-once="true" class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100" data-aos-once="true" style="font-family:'Source Sans Pro', sans-serif;">Questions about your student funding?</h2>
            </div>
            <div class="buttons"><a class="btn btn-light" role="button" href="https://landbot.io/u/H-26103-U8N9IIM4FGVTSVVP/index.html" target="_blank"   data-aos="fade-up" data-aos-duration="900" data-aos-delay="200" data-aos-once="true" style="font-family:'Source Sans Pro', sans-serif;background-color:#7e3ca6;color:#ffffff;">CHAT NOW</a></div>
        </div>
    </div>
    <div class="testimonials-clean"></div>
    <!-- Questions container End -->
    <!-- Dark Footer Start -->
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
                            <li><a href="info/opening-times.php">Opening Times</a></li>
                            <li><a href="info/how-to-find-us/php" style="color:#ffffff;">How To Find Us</a></li>
                            <li><a href="info/sitemap.php">Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-12 col-xl-12 offset-xl-0 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
                </div>
                <p class="copyright" style="color:#ffffff;">© University of the Highlands and IslandsRegistered office: 12b Ness Walk, Inverness, Scotland, IV3 5SQ&nbsp; </p>
            </div>
        </footer>
        <!-- Dark Footer End -->
    </div>
    <!-- bootstrap Js libary -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="../assets/js/script.min.js"></script>
    <script src="../dist/js/functions.js"></script>

</body>

</html>
