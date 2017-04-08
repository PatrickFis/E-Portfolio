<!DOCTYPE html>
<html>
<head>
  <title>Genetics Associates</title>
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
            <h1 class="page-header">Genetics Associates Internship
                <small>Description goes here - Change the pictures</small>
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
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="pictures/genetics/flash_report.png" alt="Flash Report">
                <h3 style="color:black;">Portion of code from one of the reports I helped re-write</h3>
                <p style="color:black;">This report let upper management know what cases had been recently completed</p>
              </div>

              <div class="item">
                <img src="pictures/genetics/pending_list.png" alt="Pending List">
                <div class="carousel-caption">
                  <h3 style="color:black;">Postion of code from one of the reports I helped re-write</h3>
                  <p style="color:black;">This report let upper management know about cases that needed to be worked on by the lab</p>
                </div>
              </div>

              <div class="item">
                <img src="pictures/genetics/report_viewer.png" alt="Report Viewer">
                <div class="carousel-caption">
                  <h3 style="color:black;">Part of a web-based report viewer I created</h3>
                  <p style="color:black;">This application finds spreadsheets and creates interactive reports for users</p>
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
      </div>

        <div class="col-md-4">
            <h3>Genetics Associates</h3>
            <h3>Details</h3>
            <ul>
                <li>Worked at x time</li>
                <li>Add pictures</li>
                <li>Add descriptions</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

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
  </html>
