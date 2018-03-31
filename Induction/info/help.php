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
  <title>Help Centre | UHI Induction Services</title>
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
            <p class="description"></p><a href="../contact/technical-support.php" class="learn-more">Contact Now »</a></div>
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
          <div class="col-12 col-md-6">
            <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
            <div class="form-row">
              <div class="col-12">
                <div class="static-map"><a href="https://www.google.com/maps/place/Perth+College+UHI/@56.4043308,-3.4636979,17z/data=!3m1!4b1!4m5!3m4!1s0x48863b490969b921:0xcfa7fc7d4040fa82!8m2!3d56.4043279!4d-3.4615092" target="_blank" rel="noopener"> <img class="img-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2207.6805422238126!2d-3.4636978835842487!3d56.404330849019935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48863b490969b921%3A0xcfa7fc7d4040fa82!2sPerth+College+UHI!5e0!3m2!1sen!2sde!4v1521222304814" alt="Google Map of Perth UHI"></a></div>
              </div>
              <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                <div><span><strong>Name</strong></span></div>
                <div><span>Email https://www.uhi.ac.uk/en/</span></div>
                <div><span>Website https://www.uhi.ac.uk/en/</span></div>
                <hr class="d-sm-none d-md-block d-lg-none">
              </div>
              <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                <div><span><strong>Office Name</strong></span></div>
                <div><span>University of the Highlands and Islands Registered office</span></div>
                <div><span>12b Ness Walk, Inverness, Scotland, IV3 5SQ</span></div>
                <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: +44 1738 877000">O:</abbr>+44 1738 877000</div>
                <hr class="d-sm-none">
              </div>
            </div>
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
                  <div class="col-12 col-md-6">
                    <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                    <div class="form-row">
                      <div class="col-12">
                        <div class="static-map"><a href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292"
                            target="_blank" rel="noopener"> <img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Daytona International Speedway"></a></div>
                      </div>
                      <div class="col-sm-6 col-md-12 col-lg-6">
                        <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                        <div><span><strong>Name</strong></span></div>
                        <div><span>email@awebsite.com</span></div>
                        <div><span>www.awebsite.com</span></div>
                        <hr class="d-sm-none d-md-block d-lg-none">
                      </div>
                      <div class="col-sm-6 col-md-12 col-lg-6">
                        <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                        <div><span><strong>Office Name</strong></span></div>
                        <div><span>55 Icannot Dr</span></div>
                        <div><span>Daytone Beach, FL 85150</span></div>
                        <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                        <hr class="d-sm-none">
                      </div>
                    </div>
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
