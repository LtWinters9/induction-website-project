<?php
setCookie("userintent","",(time+86400),"/~15011406");
session_start();
date_default_timezone_set('London/GMT');
require_once('../php/functions');
require_once('../php/db_config');
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

  <link rel="stylesheet" href="../dist/styles/main/css-main.css">
  <link rel="stylesheet" href="../dist/styles/includes/css-includes.css">
</head>

<body>
  <?php if($currentuser['userlevel']>1) {
    include "../includes/navLevel2";
     } ?>

  <div class="features-boxed">
    <div class="container">
      <div class="container">
        <h1 class="text-center" style="color:rgb(0, 0, 0);font-size:56px;font-weight:bold;font-family:'Roboto Condensed', sans-serif;">Ask us a question</h1>
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
     include "../includes/footer";
      } ?>

      <script src="../dist/scripts/inductioncorejs.js"></script>


</body>
</html>
