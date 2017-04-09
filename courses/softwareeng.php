<!DOCTYPE html>
<html>
<head>
  <title>Software Engineering</title>
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
            <h1 class="page-header">Software Engineering
                <small>Semester Project</small>
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
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
              <li data-target="#myCarousel" data-slide-to="5"></li>
              <li data-target="#myCarousel" data-slide-to="6"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="/pictures/softwareeng/homepage.png" alt="Home Page">
                <div class="carousel-caption">
                  <h3 style="color:black;">Home Page</h3>
                  <p style="color:black;">Used to display announcements, events, and other information</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/softwareeng/admin.png" alt="Admin page">
                <div class="carousel-caption">
                  <h3 style="color:black;">Admin Console</h3>
                  <p style="color:black;">Allowed administrators to manage site content</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/softwareeng/calendar.png" alt="Calendar page">
                <div class="carousel-caption">
                  <h3 style="color:black;">Calendar</h3>
                  <p style="color:black;">An editable calendar for administrators to schedule events</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/softwareeng/contact.png" alt="Contact page">
                <div class="carousel-caption">
                  <h3 style="color:black;">Contact Page</h3>
                  <p style="color:black;">An editable page that displays contact information</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/softwareeng/donate.png" alt="Donation Page">
                <div class="carousel-caption">
                  <h3 style="color:black;">Donation Page</h3>
                  <p style="color:black;">Used to fund events</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/softwareeng/login.png" alt="Login Page">
                <div class="carousel-caption">
                  <h3 style="color:black;">Login Page</h3>
                  <p style="color:black;">Used to sign in</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/softwareeng/sponsors.png" alt="Sponsors Page">
                <div class="carousel-caption">
                  <h3 style="color:black;">Sponsors Page</h3>
                  <p style="color:black;">An editable page displaying event sponsors</p>
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
            <h3>Software Engineering</h3>
            <p>Brentwood Leadership Foundation</p>
            <h3>Project Details</h3>
            <ul>
                <li>This course introduced me to a number of techniques and methods
                used in analysis, design, implementation, and testing of software.</li>
                <li>This course involved a semester long project that required my group
                to create a new website for the Brentwood Leadership Foundation.</li>
                <li>My group created various pages for the organization, such as
                a home page, a calendar page, a contact page, a donation page, user login
                and registration pages, a sponsors page, and a class members page.</li>
                <li>To make updating the website easier in the future I created a number
                of tools to be used by site administrators. These tools allowed an
                admin to edit information on the contact page, edit information on
                the sponsors page, modify user accounts, create site announcements,
                and send mass emails to registered users.</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!--  Random other projects -->
    <?php
      include '../project_randomizer.php';
     ?>
   </div>
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
