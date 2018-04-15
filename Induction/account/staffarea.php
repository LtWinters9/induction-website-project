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
    <title>Welcome to your account, <?php echo $forename; ?>  | UHI Induction Services</title>

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

  <?php if($currentuser['userlevel']>2) {
    include "../includes/navLevel3.php";
     } ?>


<header id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
      </div>
      <div class="col-md-2">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Create Content
  <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Add Pages</a></li>
            <li><a href="#">Add Posts</a></li>
            <li><a href="#">Add Users</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>
<br>

<section id="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="active">Dashboard</li>
    </ol>
  </div>
</section>


<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="index.html" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        Dashboard <span class="badge">12</span>
      </a>
          <a href="pages.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages<span class="badge">25</span></a>
          <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts<span class="badge">126</span></a>
          <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">12</span></a>
        </div>

        <div class="well">
          <h4>Disk Space Used</h4>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
              60%
            </div>
          </div>
          <h4>Bandwidth Used</h4>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
              40%
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color:  #095f59;">
            <h3 class="panel-title">Website Overview</h3>
          </div>
          <div class="panel-body">
            <div class="col-md-3">
              <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 12</h2>
                <h4>Users</h4>
              </div>
            </div>
            <div class="col-md-3">
              <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 25</h2>
                <h4>Pages</h4>
              </div>
            </div>
            <div class="col-md-3">
              <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>126</h2>
                <h4>Posts</h4>
              </div>
            </div>
            <div class="col-md-3">
              <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 2129</h2>
                <h4>Visitores</h4>
              </div>
            </div>
          </div>
        </div>
        <!--Latest User-->
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color:  #095f59;>
    <h3 class=" panel-title ">Latest Users</h3>
  </div>
  <div class="panel-body ">
    <table class="table table-striped table-hover ">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Joined</th>
      </tr>

    <tr>
      <td>Madhav Prasad</td>
      <td>mr.madhavprasad@gmail.com</td>
      <td>Dec 13,2014</td>
    </tr>
    <tr>
      <td>Nagendra Kushwaha</td>
      <td>nkushwaha822@gmail.com</td>
      <td>Feb 15,2014</td>
    </tr>
    <tr>
      <td>Arun Kumar</td>
      <td>kumarun@yahoo.com</td>
      <td>Aug 17, 2015</td>
    </tr>
    <tr>
      <td>Nabin Singh</td>
      <td>singhNavs@outlook.com</td>
      <td>March 08,2016</td>
    </tr>
    </table>

  </div>
</div>

      </div>
    </div>
  </div>
</section>


<?php if($currentuser['userlevel']>2) {
 include "../includes/footer.php";
  } ?>

<script src="../dist/scripts/inductioncorejs.js"></script>


</body>
</html>
