<!DOCTYPE html>
<html>
<head>
  <title>Object-Oriented Programming</title>
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
            <h1 class="page-header">Object-Oriented Programming
                <!-- <small>Item Subheading</small> -->
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
                <img src="/pictures/object_oriented/object.png" alt="Purple America Screenshot">
                <div class="carousel-caption">
                  <h3 style="color:black;">Purple America project</h3>
                  <p style="color:black;">Map of the USA's counties colored based on votes in the 2012 presidential election</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/object_oriented/purple_code.png" alt="Purple America Code">
                <div class="carousel-caption">
                  <h3 style="color:black;">Purple America project</h3>
                  <p style="color:black;">Portion of the code used to draw and color the map</p>
                </div>
              </div>

              <div class="item">
                <img src="../pictures/object_oriented/guitar.png" alt="Guitar Hero Code">
                <div class="carousel-caption">
                  <h3 style="color:black;">Guitar Hero project</h3>
                  <p style="color:black;">Simulates the sound of plucking a guitar string</p>
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
            <h3>Object-Oriented Projects</h3>
            <p>Two projects, Purple America and Guitar Hero, from my Object-Oriented programming course.</p>
            <h3>Project Details</h3>
            <ul>
                <li>The projects can be downloaded <a href="/code/oop/OOP.zip">here</a>.</li>
                <li>Instructions to run the programs can be found in each projects respective folders.</li>
                <li>Purple America creates a colored map based on voting records from a particular year,
                and Guitar Hero simulates the sound from plucking a guitar string.</li>
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
