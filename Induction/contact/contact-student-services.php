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
  <title>How do I contact UHI? | UHI Induction Services</title>


  <link rel="stylesheet" href="../dist/styles/main/css-main.css">
  <link rel="stylesheet" href="../dist/styles/includes/css-includes.css">

  <!-- Cookies -->
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>

</head>

<body>
  <?php if($currentuser['userlevel']>1) {
    include "../includes/navLevel2.php";
     } ?>

  <div class="features-boxed">
    <div class="container">
      <div class="container">
        <h2 class="text-center" style="color:rgb(0, 0, 0);font-size:56px;font-weight:bold;font-family:'Roboto Condensed', sans-serif;">Contact Student Services</h2>
        <h3 class="text-center" style="color:rgb(0, 0, 0);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;"><br>Or choose one of the options below<br></h3>
      </div>
      <div class="row justify-content-center features">
        <div class="col-sm-6 col-md-5 col-lg-4 item" style="height:257px;">
          <div class="box" style="font-family:'Roboto Condensed', sans-serif;"><i class="fa fa-cog icon"></i>
            <h3 class="name">Technical Help</h3>
            <p class="description"></p><a href="../contact/technical-support" class="learn-more">Contact Now »</a></div>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-4 item">
          <div class="box" style="font-family:'Roboto Condensed', sans-serif;"><i class="material-icons icon">headset_mic</i>
            <h3 class="name">Student Services</h3>
            <p class="description"></p><a href="../contact/contact-student-services" class="learn-more">Contact Now »</a></div>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-4 item" style="height:257px;">
          <div class="box" style="font-family:'Roboto Condensed', sans-serif;"><i class="fa fa-user icon"></i>
            <h3 class="name">Cancel Booking</h3>
            <p class="description"></p><a href="../contact/contact-cancel-booking" class="learn-more">Contact Now »</a></div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="container" style="font-family:'Roboto Condensed', sans-serif;">
      <hr>
      <form action="javascript:void(0);" method="get" id="contactForm"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden"
          name="to" value="email@awebsite.com">
        <div class="form-row">
            <div class="col-lg-8 mx-auto">
            <div id="successfail"></div>
          </div>
        </div>
        <div class="form-row">
            <div class="col-lg-8 mx-auto">
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

    <script src="../dist/scripts/inductioncorejs.js"></script>
    <script src="../dist/js/contact_student_serv.js"></script>

</body>
</html>
