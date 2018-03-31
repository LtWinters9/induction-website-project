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
$userid=checkUser($_SESSION['userid'],session_id(),2);
?>

<!DOCTYPE html>
<html lang="en">

<?php if($currentuser['userlevel']>1) {
   include "../includes/banner.html";
    } ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Help | UHI Induction Services</title>
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
      <!--      <div class="intro"></div>
            <div style="background-image:url(&quot;../assets/img/studentserv.png&quot;);height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
                <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(0,0,0,0.1);font-family:'Roboto Condensed', sans-serif;">
                    <div class="d-flex align-items-center order-12" style="height:200px;">

                    </div>
                </div>
            </div> -->
      <div class="container">
        <h1 class="text-center" style="color:rgb(0, 0, 0);font-size:56px;font-weight:bold;font-family:'Roboto Condensed', sans-serif;">Ask us a question</h1>
        <h3 class="text-center" style="color:rgb(0, 0, 0);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;"><br>Or choose one of the options below<br></h3>
      </div>
      <div class="row justify-content-center features">
        <div class="col-sm-6 col-md-5 col-lg-4 item" style="height:257px;">
          <div class="box" style="font-family:'Roboto Condensed', sans-serif;"><i class="fa fa-cog icon"></i>
            <h3 class="name">Technical Help</h3>
            <p class="description"></p><a href="../contact/contact-tech-support.php" class="learn-more">Contact Now »</a></div>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-4 item">
          <div class="box" style="font-family:'Roboto Condensed', sans-serif;"><i class="material-icons icon">headset_mic</i>
            <h3 class="name">Student Services</h3>
            <p class="description"></p><a href="../contact/contact-student-services.php" class="learn-more">Contact Now »</a></div>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-4 item" style="height:257px;">
          <div class="box" style="font-family:'Roboto Condensed', sans-serif;"><i class="fa fa-user icon"></i>
            <h3 class="name">Cancel Booking</h3>
            <p class="description"></p><a href="../contact/contact-cancel-booking.php" class="learn-more">Contact Now »</a></div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="container" style="font-family:'Roboto Condensed', sans-serif;">
      <h1 style="font-family:'Roboto Condensed', sans-serif;font-size:28px;">How to Find Us<br><br></h1>
      <hr>
      <form action="javascript:void(0);" method="get" id="contactForm"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden"
          name="to" value="email@awebsite.com">
        <div class="form-row">
          <div class="col-md-6">
            <div id="successfail"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-12 col-md-6" id="message">
            <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small>
                            </h2>
            <div class="form-group"><label for="from-name">Name</label><span class="required-input">*</span>
              <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" name="name" required="" placeholder="Full Name" id="from-name"></div>
            </div>
            <div class="form-group"><label for="from-email">Email</label><span class="required-input">*</span>
              <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text" name="email" required="" placeholder="Email Address" id="from-email"></div>
            </div>
            <div class="form-row">
              <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" name="phone" required="" placeholder="Primary Phone" id="from-phone"></div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-control" name="call time" id="from-calltime"><optgroup label="Best Time to Call"><option value="Morning" selected="">Morning</option><option value="Afternoon">Afternoon</option><option value="Evening">Evening</option></optgroup></select></div>
                </div>
              </div>
            </div>
            <div class="form-group"><label for="from-comments">Comments</label><textarea class="form-control" rows="5" name="comments" placeholder="Enter Comments" id="from-comments"></textarea></div>
            <div class="form-group">
              <div class="form-row">
                <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                <div class="col"><button class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
              </div>
            </div>
            <hr class="d-flex d-md-none">
          </div>
      </form>
      </div>
      <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Contact Information</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
              <form action="javascript:void(0);" method="get" id="contactForm"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden"
                  name="to" value="email@awebsite.com">
                <div class="form-row">
                  <div class="col-md-6">
                    <div id="successfail"></div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-12 col-md-6" id="message">
                    <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small>
                                        </h2>
                    <div class="form-group"><label for="from-name">Name</label><span class="required-input">*</span>
                      <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" name="name" required="" placeholder="Full Name" id="from-name"></div>
                    </div>
                    <div class="form-group"><label for="from-email">Email</label><span class="required-input">*</span>
                      <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text" name="email" required="" placeholder="Email Address" id="from-email"></div>
                    </div>
                    <div class="form-row">
                      <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                        <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                          <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" name="phone" required="" placeholder="Primary Phone" id="from-phone"></div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                        <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                          <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-control" name="call time" id="from-calltime"><optgroup label="Best Time to Call"><option value="Morning" selected="">Morning</option><option value="Afternoon">Afternoon</option><option value="Evening">Evening</option></optgroup></select></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group"><label for="from-comments">Comments</label><textarea class="form-control" rows="5" name="comments" placeholder="Enter Comments" id="from-comments"></textarea></div>
                    <div class="form-group">
                      <div class="form-row">
                        <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                        <div class="col"><button class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                      </div>
                    </div>
                    <hr class="d-flex d-md-none">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if($currentuser['userlevel']>1) {
     include "../includes/footer.php";
      } ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="../assets/js/script.min.js"></script>
</body>

</html>
