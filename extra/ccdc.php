<!DOCTYPE html>
<html>
<head>
  <title>SECCDC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="/css/style.css"> -->
  <!-- Bootstrap Core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS -->
  <link href="/css/creative.css" rel="stylesheet">

  <style>
  .navbar-default {
    background-color: white;
    border-color: rgba(34, 34, 34, 0.05);
    font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
    -webkit-transition: all 0.35s;
    -moz-transition: all 0.35s;
    transition: all 0.35s;
  }
  .navbar-default .navbar-header .navbar-brand {
    color: #F05F40;
    font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
    font-weight: 700;
    text-transform: uppercase;
  }
  .navbar-default .navbar-header .navbar-brand:hover,
  .navbar-default .navbar-header .navbar-brand:focus {
    color: #eb3812;
  }
  .navbar-default .navbar-header .navbar-toggle {
    font-weight: 700;
    font-size: 12px;
    color: #222222;
    text-transform: uppercase;
  }
  .navbar-default .nav > li > a,
  .navbar-default .nav > li > a:focus {
    text-transform: uppercase;
    font-weight: 700;
    font-size: 13px;
    color: #222222;
  }
  .navbar-default .nav > li > a:hover,
  .navbar-default .nav > li > a:focus:hover {
    color: #F05F40;
  }
  .navbar-default .nav > li.active > a,
  .navbar-default .nav > li.active > a:focus {
    color: #F05F40 !important;
    background-color: transparent;
  }
  .navbar-default .nav > li.active > a:hover,
  .navbar-default .nav > li.active > a:focus:hover {
    background-color: transparent;
  }

  </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body id="page-top">

  <?php
  	include '../new_navbar.php';
  ?>


      <!-- Testing portfolio item from Github -->
      <!-- Page Content -->
      <!-- Margin added to fix navbar issues -->
<div class="container" style="margin-top:30px;">

    <!-- Portfolio Item Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Southeast Collegiate Cyber Defense Competition
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="/pictures/seccdc/prelim.jpg" alt="Picture of us after the preliminary round">
              <div class="carousel-caption">
                <h3>Preliminary Round</h3>
                <p>Everyone that participated in the preliminary competition</p>
              </div>
            </div>

            <div class="item">
              <img src="/pictures/seccdc/group_pic.jpg" alt="Group picture before we left for Georgia">
              <div class="carousel-caption">
                <h3>Group Picture</h3>
                <p>Right before we drove to Georgia</p>
              </div>
            </div>

            <div class="item">
              <img src="/pictures/seccdc/end.jpg" alt="Lipscomb had every service up at the end">
              <div class="carousel-caption">
                <h3>Services</h3>
                <p>Lipscomb had every service up at the end of the competition</p>
              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> -->
          </div>
      </div>

        <div class="col-md-4">
            <h3>SECCDC</h3>
            <h3>Details</h3>
            <ul>
                <li>I competed in the 2017 SECCDC Regional Competition.</li>
                <li>I was the mail/SSH server admin. This was fairly challenging,
                as I was not entirely familiar with all of the applications that
                needed to be be kept running in order for the mail service to stay up.
                A detailed markdown report of what occured during the competition can be read
                <a href="../ccdc/Ubuntu AAR.md">here.</a></li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!-- Other projects -->

    <?php
      include '../project_randomizer.php';
     ?>
  <!-- Footer here, can add this to other pages later. -->
  <!-- <br><br><br><br><br>
  <div class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">
        <p class="navbar-text pull-left">© 2017</p>
      </div>
  </div> -->
  </body>
  <!-- jQuery -->
  <script src="/vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="/vendor/scrollreveal/scrollreveal.min.js"></script>
  <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Theme JavaScript -->
  <script src="/js/creative.min.js"></script>
  </html>
