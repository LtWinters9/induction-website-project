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

<?php if($currentuser['userlevel']>1) {
   include "../includes/banner.html";
    } ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help | UHI Induction Services<</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
</head>

<body>
  <?php if($currentuser['userlevel']>1) {
    include "../includes/navLevel2.php";
     } ?>

    <div class="features-boxed">
        <div class="container">
            <div class="intro"></div>
            <div style="background-image:url(&quot;../assets/img/studentserv.png&quot;);height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
                <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(0,0,0,0.1;font-family:'Roboto Condensed', sans-serif;">
                    <div class="d-flex align-items-center order-12" style="height:200px;">
                        <div class="container">
                            <h1 class="text-center" style="color:rgb(0, 0, 0);font-size:56px;font-weight:bold;font-family:'Roboto Condensed', sans-serif;">Ask us a question</h1>
                            <h3 class="text-center" style="color:rgb(0, 0, 0);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;"><br>Or choose one of the options below<br></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item" style="height:257px;">
                    <div class="box" style="font-family:'Roboto Condensed', sans-serif;"><i class="fa fa-cog icon"></i>
                        <h3 class="name">Technical Help</h3>
                        <p class="description"></p><a href="../contact/contact-student-services.php" class="learn-more">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="material-icons icon">headset_mic</i>
                        <h3 class="name">Student Services</h3>
                        <p class="description"></p><a href="../contact/contact-student-services.php" class="learn-more">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item" style="height:257px;">
                    <div class="box"><i class="fa fa-user icon"></i>
                        <h3 class="name">Staff Information</h3>
                        <p class="description"></p><a href="../contact/contact-student-services.php" class="learn-more">Learn more »</a></div>
                </div>
            </div>
        </div>
    </div>

<!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center">Contact Perth UHI Student Services</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">

            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

    <?php if($currentuser['userlevel']>1) {
    include "../includes/footer.php";
    } ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="../assets/js/script.min.js"></script>
    </body>

    </html>
