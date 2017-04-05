<!DOCTYPE html>
<html>
<head>
  <title>Information Security</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
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
            <h1 class="page-header">Information Security Project
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
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="../pictures/infosec/pic1.png" alt="Graph generated from logs">
              </div>

              <div class="item">
                <img src="../pictures/infosec/pic2.png" alt="Part of the OSSEC Kibana GUI">
              </div>

              <div class="item">
                <img src="../pictures/infosec/pic3.png" alt="Logs in JSON format">
              </div>

              <div class="item">
                <img src="../pictures/infosec/pic4.png" alt="Log with more details shown">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <div class="col-md-4">
            <h3>OSSEC</h3>
            <h3>Project Details</h3>
            <ul>
                <li>This project involved setting up a vulnerable operating system and using an intrusion detection system to monitor attacks
                occuring on it.</li>
                <li>The intrusion detection system that my team chose was OSSEC, as it was extremely well-documented and quite easy
                to use. After setting up a server with OSSEC, a virtual machine running an extremely outdated and misconfigured version
                of Ubuntu was setup running an OSSEC agent to generate reports. The vulnerable server was attacked using Metasploit, and the
                logs were used to generate reports and graphs depicting the severity of the attack and what level of access was gained from
                it.</li>
                <li>Challenges</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!--  Random other projects -->
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
