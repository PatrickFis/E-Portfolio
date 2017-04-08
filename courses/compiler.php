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
    <!-- <div class="container">
      <div class="page-header">
        <h1>Patrick Fischer</h1>
      </div>

      <div class="row">
          <ul class="nav nav-tabs-no-style nav-stacked col-md-3">
            <li class="active"><a data-toggle="tab" href="#Tab1">Freshman Year</a></li>
            <li><a data-toggle="tab" href="#Tab2">Sophomore Year</a></li>
            <li><a data-toggle="tab" href="#Tab3">Junior Year</a></li>
            <li><a data-toggle="tab" href="#Tab4">Senior Year</a></li>
          </ul>
          <div class="col-md-6">
            <div class="tab-content">
              <div id="Tab1" class="tab-pane fade in active">
                <h3>Freshman Year</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div id="Tab2" class="tab-pane fade">
                <h3>Sophomore Year</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div id="Tab3" class="tab-pane fade">
                <h3>Junior Year</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div id="Tab4" class="tab-pane fade">
                <h3>Senior Year</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
        </div>
      </div> -->


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
                <img src="../pictures/compiler/compiler.png" alt="Portion of parser">
                <div class="carousel-caption">
                  <h3>Bison Parser</h3>
                  <p>A short snippet of code taken from the parser</p>
                </div>
              </div>

              <div class="item">
                <img src="../pictures/compiler/zeller.png" alt="Zeller's Congruence SLIC">
                <div class="carousel-caption">
                  <h3>Zeller's Congruence</h3>
                  <p>A small portion of SLIC code from a program that calculates Zeller's Congruence</p>
                </div>
              </div>

              <div class="item">
                <img src="../pictures/compiler/zellergstal.png" alt="Zeller's Congruence GSTAL">
                <div class="carousel-caption">
                  <h3>Zeller's Congruence</h3>
                  <p>Part of the GSTAL code generated from the program shown in the previous slide</p>
                </div>
              </div>

              <div class="item">
                <img src="../pictures/compiler/zelleroutput.png" alt="Zeller's Congruence Output">
                <div class="carousel-caption">
                  <h3>Zeller's Congruence</h3>
                  <p>Output of the assembled program showing what day a specific date fell on</p>
                </div>
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
            <h3>SLIC Compiler</h3>
            <p>This program will compile programs written in SLIC to GSTAL.</p>
            <h3>Project Details</h3>
            <ul>
                <li>The project can be downloaded <a href="../code/compiler/Compiler.zip">here</a>.</li>
                <li>The compilation for this project is fairly involved. To compile the project, you must use
                Flex, Bison, GCC, and make. If all of these tools are installed the program can be compiled
                by typing "make" (if in a Unix environment), or by typing "make windows" (if using Cygwin for Windows).
                TODO: Screenshots have been provided showing the results of compiling and running the project on an input file
                for conveinence.</li>
                <li>Challenges</li>
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
