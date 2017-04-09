<!DOCTYPE html>
<html>
<head>
  <title>Operating Systems</title>
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
            <h1 class="page-header">Operating Systems
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
                <img src="/pictures/operatingsystems/simple_shell.png" alt="Simple Shell">
                <div class="carousel-caption">
                  <h3 style="color:black;">Simple Shell</h3>
                  <p style="color:black;">This program acts as a sort of stripped down Linux shell</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/operatingsystems/kernel_module.png" alt="Kernel Module">
                <div class="carousel-caption">
                  <h3 style="color:black;">Kernel Module</h3>
                  <p style="color:black;">This program is a very simple kernel module</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/operatingsystems/collatz.png" alt="Collatz">
                <div class="carousel-caption">
                  <h3 style="color:black;">Collatz</h3>
                  <p style="color:black;">Calculates Collatz numbers using multiple threads</p>
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
            <h3>Operating Systems</h3>
            <h3>Details</h3>
            <ul>
                <li>This course focused on introducing operating system concepts such as
                scheduling algorithms, process management, deadlocks, paging
                and segmentation, files and protection, and process
                coordination and communication.</li>
                <li>A number of projects were assigned in this course, with some of the
                more interesting ones being shown on the left.</li>
                <li>These projects included creating a program that emulates a Linux
                shell, writing simple kernel modules, and using multiple threads
                to speed up calculations.</li>
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
