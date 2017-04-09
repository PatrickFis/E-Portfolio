<!DOCTYPE html>
<html>
<head>
  <title>Software Engineering</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <?php
  	include '../navbar.php';
  ?>

      <!-- Testing portfolio item from Github -->
      <!-- Page Content -->
<div class="container">

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
                  <h3>Admin Console</h3>
                  <p>Allowed administrators to manage site content</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/softwareeng/calendar.png" alt="Calendar page">
                <div class="carousel-caption">
                  <h3>Calendar</h3>
                  <p>An editable calendar for administrators to schedule events</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/softwareeng/contact.png" alt="Contact page">
                <div class="carousel-caption">
                  <h3>Contact Page</h3>
                  <p>An editable page that displays contact information</p>
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
  </html>
