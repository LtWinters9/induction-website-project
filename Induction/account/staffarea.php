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
    <title>Welcome to your Staff area, <?php echo $forename; ?>  | UHI Induction Services</title>

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
</head>

<body>

  <div id="wrapper" class="animate">
     <nav class="navbar header-top fixed-top navbar-expand-lg navbar-dark bg-dark">
       <span class="navbar-toggler-icon leftmenutrigger"></span>
       <a class="navbar-brand" href="#">LOGO</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
         aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarText">
         <ul class="navbar-nav animate side-nav">
           <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-user"></i> Submenu <i class="fas fa-user shortmenu animate"></i>
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="#">Action</a>
           <a class="dropdown-item" href="#">Another action</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="#">Something else here</a>
         </div>
       </li>
           <li class="nav-item">
             <a class="nav-link" href="#" title="Cart"><i class="fas fa-cart-plus"></i> Cart <i class="fas fa-cart-plus shortmenu animate"></i></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#" title="Comment"><i class="fas fa-comment"></i> Comment <i class="fas fa-comment shortmenu animate"></i></a>
           </li>
         </ul>
         <ul class="navbar-nav ml-md-auto d-md-flex">
           <li class="nav-item">
             <a class="nav-link" href="#"><i class="fas fa-user"></i> Profile</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#"><i class="fas fa-key"></i> Logout</a>
           </li>
         </ul>
       </div>
     </nav>
     <div class="container-fluid">
       <div class="row">
         <div class="col">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title">Try Other</h5>
               <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
               <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
               <a href="https://bootsnipp.com/pradeep330" class="card-link">link</a>
               <a href="http://websitedesigntamilnadu.com" class="card-link">Another link</a>
             </div>
           </div>
         </div>
         <div class="col">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title">Try Other</h5>
               <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
               <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
               <a href="https://bootsnipp.com/pradeep330" class="card-link">link</a>
               <a href="http://websitedesigntamilnadu.com" class="card-link">Another link</a>
             </div>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <table class="table">
                 <thead>
                   <tr>
                     <th scope="col">#</th>
                     <th scope="col">First</th>
                     <th scope="col">Last</th>
                     <th scope="col">Handle</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                   </tr>
                   <tr>
                     <th scope="row">2</th>
                     <td>Jacob</td>
                     <td>Thornton</td>
                     <td>@fat</td>
                   </tr>
                   <tr>
                     <th scope="row">3</th>
                     <td>Larry</td>
                     <td>the Bird</td>
                     <td>@twitter</td>
                   </tr>
                 </tbody>
               </table>
             </div>
           </div>
         </div>
         <div class="col">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <table class="table">
                 <thead>
                   <tr>
                     <th scope="col">#</th>
                     <th scope="col">First</th>
                     <th scope="col">Last</th>
                     <th scope="col">Handle</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                   </tr>
                   <tr>
                     <th scope="row">2</th>
                     <td>Jacob</td>
                     <td>Thornton</td>
                     <td>@fat</td>
                   </tr>
                   <tr>
                     <th scope="row">3</th>
                     <td>Larry</td>
                     <td>the Bird</td>
                     <td>@twitter</td>
                   </tr>
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>



<?php if($currentuser['userlevel']>1) {
 include "../includes/footer.php";
  } ?>

<script src="../dist/scripts/inductioncorejs.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

</body>
</html>
