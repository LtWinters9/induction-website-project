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
    <title>Contact | UHI Induction Services</title>

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


    <style>
        #mapCanvas {
            width: 80%;
            height: 700px;
            background-color: grey;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

</head>

<body>


<?php if($currentuser['userlevel']==2) {
    include "../includes/navLevel2.php";
} ?>

<?php if($currentuser['userlevel']==3) {
    include "../includes/navLevel3.php";
} ?>


 <br>

  <h2 class="text-center" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100" data-aos-once="true" style="font-family:'Roboto Condensed', sans-serif;">Explore the UHI Network</h2>
    <h3 class="text-center">Select an icon on the map below to find out about the locations in the UHI network</h3>

  <br>
  <div id="mapCanvas"></div>
  <script>
      function initMap() {
          var map;
          var bounds = new google.maps.LatLngBounds();
          var mapOptions = {
              mapTypeId: 'roadmap'
          };

          // Display a map on the web page
          map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
          map.setTilt(50);

          // Multiple markers location, latitude, and longitude
          var markers = [
              ['Brahan Building', 56.404179, -3.461521],
              ['Academy of Sport', 56.403416, -3.458507],
              ['Goodlyburn Building', 56.403635, -3.457282],
              ['Inverness College', 57.475009, -4.182238],
              ['School of Forestry', 57.488882, -4.108393],
              ['Moray', 57.645394, -3.315859],
              ['Orkney', 58.986340, -2.947613]
          ];

        var icon = '../assets/img/uhimap.png'

          // Info window content
          var infoWindowContent = [
              ['<div class="info_content">' +
              '<h3>Perth College - Brahan Buiding</h3>' +
              '<p style=\'color:#3d3d3d;\'>The main building of Perth College where courses such as Computing, ' +
              'Hairdressing, Aviation Engineering among others are located</p>' +
              ' <a href="https://www.perth.uhi.ac.uk/">More Information</a> ' +
              '<img src="../assets/img/Moray.jpg" alt="Moray College"> ' +
              '</div>'],
              ['<div class="info_content">' +
              '<h3>Perth College - Academy of Sport and Wellbeing</h3>' +
              '<p style=\'color:#3d3d3d;\'>You do sporty stuff here!</p>' +
              ' <a href="https://www.perth.uhi.ac.uk/academy-of-sport-and-wellbeing/">More Information</a> ' +
              '</div>'],
              ['<div class="info_content">' +
              '<h3>Perth College - Goodlyburn Building</h3>' +
              '<p style=\'color:#3d3d3d;\'>Courses such as Music are located here.</p>' +
              ' <a href="https://www.perth.uhi.ac.uk/">More Information</a> ' +
              '</div>'],
              ['<div class="info_content">' +
              '<h3 >Inverness College</h3>' +
              '<p style=\'color:#3d3d3d;\'>Most courses on offer at Inverness College are located here.</p>' +
              ' <a href="https://www.inverness.uhi.ac.uk/">More Information</a> ' +
              '</div>'],
              ['<div class="info_content">' +
              '<h3>Inverness College - Scottish School of Forestry</h3>' +
              '<p style=\'color:#3d3d3d;\'>Learn about forests</p>' +
              ' <a href="https://www.inverness.uhi.ac.uk/">More Information</a> ' +
              '</div>'],
              ['<div class="info_content">' +
              '<h3>Moray College</h3>' +
              '<p style=\'color:#3d3d3d;\'>All Moray courses are offered here.</p>' +
              ' <a href="https://www.moray.uhi.ac.uk/">More Information</a> ' +
              '</div>'],
              ['<div class="info_content">' +
              '<h3>Orkney College</h3>' +
              '<p style=\'color:#3d3d3d;\'>All Orkney College courses are offered here.</p>' +
              ' <a href="https://www.orkney.uhi.ac.uk/">More Information</a> ' +
              '</div>']
          ];

          // Add multiple markers to map
          var infoWindow = new google.maps.InfoWindow(), marker, i;

          // Place each marker on the map
          for( i = 0; i < markers.length; i++ ) {
              var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
              bounds.extend(position);
              marker = new google.maps.Marker({
                  position: position,
                  icon: icon,
                  map: map,
                  title: markers[i][0]
              });


              // Add info window to marker
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                  return function() {
                      infoWindow.setContent(infoWindowContent[i][0]);
                      infoWindow.open(map, marker);
                  }
              })(marker, i));

              // Center the map to fit all markers on the screen
              map.fitBounds(bounds);
          }

          // Set zoom level
          var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
              this.setZoom(14);
              google.maps.event.removeListener(boundsListener);
          });


      }
      // Load initialize function
      google.maps.event.addDomListener(window, 'load', initMap);

  </script>

  <!-- reference: https://www.codexworld.com/google-maps-with-multiple-markers-using-javascript-api/-->

    <div class="testimonials-clean"></div>
    <div data-aos="fade-right" data-aos-once="true" class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100" data-aos-once="true" style="font-family:'Roboto Condensed', sans-serif;">Questions about your student experience?</h2>
            </div>
            <div class="buttons"><a class="btn btn-light" role="button" href="../account/login" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200" data-aos-once="true" style="font-family:'Roboto Condensed', sans-serif;background-color:#7e3ca6;color:#ffffff;">CHAT NOW</a></div>
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

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo7doclUFDIbAyE1Uemyo79yTjeOzy6O4&callback=initMap"></script>

</body>

</html>
