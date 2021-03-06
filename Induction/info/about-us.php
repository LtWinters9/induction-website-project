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


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us | UHI Induction Services</title>

    <!-- bootstrap css libary -->
    <link rel="stylesheet" href="../dist/styles/main/css-main.css">
    <link rel="stylesheet" href="../dist/styles/includes/css-includes.css">

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
                <h2 class="text-left" style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">About The University of the Highlands and Islands</h2>
                <p class="text-left"  style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">We're delighted that you have chosen to come to Perth College UHI, one of Scotland's leading colleges of further and higher education and part of the University of the Highlands and Islands</p>
            </div>
            <div class="buttons"></div>
        </div>
    </div>
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-left"style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">Perth UHI </h2>
                <p class="text-left" style="color:#37434d;font-family:'Roboto Condensed', sans-serif;"> As one of our students, you can now use the many resources that we provide to make your time with us as enjoyable and productive as possible. There's lots of information for you to take in, but we are here to help you to get the most out of your course and give you guidance and support whenever you need it. </p>
                  <p class="text-left" style="color:#37434d;font-family:'Roboto Condensed', sans-serif;"> There are lots of useful links on our site so you can get an idea about all the things you need to know. As well as links to people who can help you, to more detailed information and documents, you'll also find maps of our main campus and information about our learning centres. </p>
                    <p class="text-left" style="color:#37434d;font-family:'Roboto Condensed', sans-serif;"> We hope you'll find your visit to this web site useful, but if you have any comments or questions, please contact your Personal Academic Tutor (if you have already enrolled with us). </p>
            </div>
            <!-- <div class="buttons"></div> -->
        </div>
        <div class="container">
            <div class="intro">
                <h2 class="text-left" style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">Union Building </h2>
                <p class="text-left"  style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">The Union – within the Webster Building on the main College Campus – is the student social space on campus. </p>
                <p class="text-left"  style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">It is open Monday to Thursday 8:30am to 9pm and on Friday from 8.30am–4.30pm </p>
                <p class="text-left"  style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">All of our students are welcome to come along, meet their friends and spend their free time on campus away from classrooms and study areas. We have a Costa Coffee bar that serves drinks, sandwiches, snacks and great coffee between 8.30am and 3pm, but if you prefer to bring your own lunch to College, you can still use our comfy seating areas.</p>
                <p class="text-left"  style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">If you are a parent, and you have your breaks with your children, we have a designated children’s area in another room that includes vinyl flooring, toys and a high-chair. You are welcome to use this area at lunchtime. </p>
                <p class="text-left"  style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">We continuously work to improve the facilities at The Union in line with the student feedback we receive. If you have a comment or suggestion to make, please tell us in person </p>
            </div>
            <div class="buttons"></div>
        </div>
        <div class="container">
            <div class="intro">
                <h2 class="text-left" style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">2018 </h2>
                <p class="text-left" style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">So far 2018 has included the following</p>
                <ul>
                    <li <style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">Induction Service for new student</li>
                    <li <style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">Fourm system to chat to students</li>
                    <li <style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">Chatbot to ask any student related questions</li>
                    <li <style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">Extended the Academy of Sport and Wellbeing centre</li>
                    <li <style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">Page last edited on 06/02/2018</li>
                </ul>
            </div>
            <div class="buttons"></div>
        </div>
    </div>


 <!-- Map Section -->
 <div class="map-clean">
       <div class="container">
           <div class="intro">
               <h2 class="text-center"style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">Directions to Perth</h2>
               <p class="text-center"style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">Follow Tulloch Rd to Crieff Rd/A85, Head east on Wallace Cres.</p>
               <p class="text-center"style="color:#37434d;font-family:'Roboto Condensed', sans-serif;">At the roundabout, take the 3rd exit onto Tulloch Rd, Continue on Crieff Rd/A85. Take Dunkeld Rd to N Methven St. </p>
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
             <h2 class="text-center" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100" data-aos-once="true" style="font-family:'Roboto Condensed', sans-serif;">Questions about your student funding?</h2>
         </div>
         <div class="buttons"><a class="btn btn-light" role="button" href="account/login" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200" data-aos-once="true" style="font-family:'Roboto Condensed', sans-serif;background-color:#7e3ca6;color:#ffffff;">CHAT NOW</a></div>
     </div>
 </div>
 <div class="testimonials-clean"></div>

 <?php if($currentuser['userlevel']<1) {
  include "../includes/footer.php";
   } ?>

   <?php if($currentuser['userlevel']>1) {
    include "../includes/footer.php";
     } ?>

     <script src="../dist/scripts/inductioncorejs.js"></script>

</body>

</html>
