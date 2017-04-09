<!DOCTYPE html>
<html>
<head>
  <title>Compiler Construction</title>
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
            <h1 class="page-header">Compiler Construction
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
                <img src="/pictures/compiler/compiler.png" alt="Portion of parser">
                <div class="carousel-caption">
                  <h3>Bison Parser</h3>
                  <p>A short snippet of code taken from the parser</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/compiler/zeller.png" alt="Zeller's Congruence SLIC">
                <div class="carousel-caption">
                  <h3>Zeller's Congruence</h3>
                  <p>A small portion of SLIC code from a program that calculates Zeller's Congruence</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/compiler/zellergstal.png" alt="Zeller's Congruence GSTAL">
                <div class="carousel-caption">
                  <h3>Zeller's Congruence</h3>
                  <p>Part of the GSTAL code generated from the program shown in the previous slide</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/compiler/zelleroutput.png" alt="Zeller's Congruence Output">
                <div class="carousel-caption">
                  <h3 style="color:black;">Zeller's Congruence</h3>
                  <p style="color:black;">Output of the assembled program showing what day a specific date fell on</p>
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
            <h3>SLIC Compiler</h3>
            <p>This program will compile programs written in SLIC to GSTAL.</p>
            <h3>Project Details</h3>
            <ul>
                <li>The project can be downloaded <a href="../code/compiler/Compiler.zip">here</a>.</li>
                <li>The compilation for this project is fairly involved. To compile the project, you must use
                Flex, Bison, GCC, and make. If all of these tools are installed the program can be compiled
                by typing "make" (if in a Unix environment), or by typing "make windows" (if using Cygwin for Windows).
                Screenshots have been provided showing the results of compiling and running the project on an input file
                for conveinence.</li>
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
