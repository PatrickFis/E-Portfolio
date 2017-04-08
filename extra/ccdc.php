<!DOCTYPE html>
<html>
<head>
  <title>SECCDC</title>
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
                <h3 style="color:black;">Preliminary Round</h3>
                <p style="color:black;">Everyone that participated in the preliminary competition</p>
              </div>
            </div>

            <div class="item">
              <img src="/pictures/seccdc/group_pic.jpg" alt="Group picture before we left for Georgia">
              <div class="carousel-caption">
                <h3 style="color:black;">Group Picture</h3>
                <p style="color:black;">Right before we drove to Georgia</p>
              </div>
            </div>

            <div class="item">
              <img src="/pictures/seccdc/end.jpg" alt="Lipscomb had every service up at the end">
              <div class="carousel-caption">
                <h3 style="color:black;">Services</h3>
                <p style="color:black;">Lipscomb had every service up at the end of the competition</p>
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
  </html>
