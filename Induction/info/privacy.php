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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if($currentuser['userlevel']<1) { ?>
    <title>Privacy Policy | UHI Induction Services</title>
    <?php } ?>

    <?php if($currentuser['userlevel']>1) { ?>
    <title>Welcome,
      <?php echo $forename; ?> | Privacy Policy | UHI Induction Services</title>
    <?php } ?>
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

<body>
  <!-- Nav Bar -->
  <?php if($currentuser['userlevel']<1) {
    include "../includes/navLevel1.php";
     } ?>

     <?php if($currentuser['userlevel']>1) {
       include "../includes/navLevel2.php";
        } ?>
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">What information do we collect?</h2>
                <p class="text-left"  style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">We collect information from you when you fill out a form. </p>
                <p class="text-left"  style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">When signing in on our website, as appropriate, you may be asked to enter your: student number or e-mail address. You may, however, visit our site anonymously. </p>
            </div>
            <div class="buttons"></div>
        </div>
    </div>
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-left"style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">What do we use your information for? </h2>
                <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">Any of the information we collect from you may be used in one of the following ways:  </p>
                  <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">To personalize your experience (your information helps us to better respond to your individual needs) </p>
                    <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">To improve our website (we continually strive to improve our website offerings based on the information and feedback we receive from you)  </p>
                    <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">To improve student service (your information helps us to more effectively respond to your students service requests and support needs)  </p>
                    <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">To administer a contest, promotion, survey or other site feature  </p>
             </div>
            <!-- <div class="buttons"></div> -->
        </div>
          <div class="container">
              <div class="intro">
                  <h2 class="text-left"style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">How do we protect your information </h2>
                  <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">We implement a variety of security measures to maintain the safety of your personal information when you enter, submit, or access your personal information.</p>
               </div>
            <div class="buttons"></div>
        </div>
        <div class="container">
            <div class="intro">
                <h2 class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">Do we use cookies? </h2>
                <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">Yes (Cookies are small files that a site or its service provider transfers to your computers hard drive through your Web browser (if you allow) that enables the sites or service providers systems to recognize your browser and capture and remember certain information</p>
                <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">We use cookies to understand and save your preferences for future visits</p>
            </div>
        </div>
        <div class="container">
            <div class="intro">
                <h2 class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">Do we disclose any information to outside parties? </h2>
                <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>
            </div>
        </div>
        <div class="container">
            <div class="intro">
                <h2 class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">Third party links </h2>
                <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">Occasionally, at our discretion, we may include or offer third party products or services on our website. These third party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.</p>
            </div>
        </div>
        <div class="container">
            <div class="intro">
                <h2 class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">Online Privacy Policy Only </h2>
                <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">This online privacy policy applies only to information collected through our website and not to information collected offline.</p>
            </div>
        </div>
        <div class="container">
            <div class="intro">
                <h2 class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">Terms and Conditions </h2>
                <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">Please also visit our Terms and Conditions section establishing the use, disclaimers, and limitations of liability governing the use of our website (link here)</p>
            </div>
        </div>
        <div class="container">
            <div class="intro">
                <h2 class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">Your Consent  </h2>
                <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">By using our site, you consent to our privacy policy.</p>
            </div>
        </div>
        <div class="container">
            <div class="intro">
                <h2 class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">Changes to our Privacy Policy </h2>
                <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">If we decide to change our privacy policy, we will post those changes on this page. </p>
            </div>
        </div>
        <div class="container">
            <div class="intro">
                <h2 class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">Contacting Us </h2>
                <p class="text-left" style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">If there are any questions regarding this privacy policy you may contact us using the information below. </p>



                <ul>
                    <li <style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">UHI induction</li>
                    <li <style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">email@email.net</li>
                    <li <style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">This policy was last modified on 02/03/2018</li>
                </ul>
            </div>
            <div class="buttons"></div>
        </div>
    </div>


 <!-- Map Section -->
 <div class="map-clean">
       <div class="container">
           <div class="intro">
               <h2 class="text-center"style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">Directions to Perth</h2>
               <p class="text-center"style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">Follow Tulloch Rd to Crieff Rd/A85, Head east on Wallace Cres.</p>
               <p class="text-center"style="color:#37434d;font-family:'Source Sans Pro', sans-serif;">At the roundabout, take the 3rd exit onto Tulloch Rd, Continue on Crieff Rd/A85. Take Dunkeld Rd to N Methven St. </p>
           </div>
            </div>
             </div>
<!-- Add Perth UHI location here -->
 <div class="container">
 <div class="row-fluid">
       <div class="span8">
         <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35335.70186367753!2d-3.4842713681986224!3d56.39052332673595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488615c6fb484d03%3A0xb65f146e7df49618!2sPerth%2C+UK!5e0!3m2!1sen!2sde!4v1516037254479" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>
  </div>
</div>



 <div class="testimonials-clean"></div>
 <div data-aos="fade-right" data-aos-once="true" class="highlight-clean">
     <div class="container">
         <div class="intro">
             <h2 class="text-center" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100" data-aos-once="true" style="font-family:'Source Sans Pro', sans-serif;">Questions about your student funding?</h2>
         </div>
         <div class="buttons"><a class="btn btn-light" role="button" href="account/login.php" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200" data-aos-once="true" style="font-family:'Source Sans Pro', sans-serif;background-color:#7e3ca6;color:#ffffff;">CHAT NOW</a></div>
     </div>
 </div>
 <div class="testimonials-clean"></div>

 <?php if($currentuser['userlevel']<1) {
  include "../includes/footer.php";
   } ?>

   <?php if($currentuser['userlevel']>1) {
    include "../includes/footer.php";
     } ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<script src="../assets/js/script.min.js"></script>
<script src="../dist/js/cookies.js"></script>

</body>

</html>
