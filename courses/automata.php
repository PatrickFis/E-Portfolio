<!DOCTYPE html>
<html>
<head>
  <title>Automata &amp; Formal Language Theory</title>
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
            <h1 class="page-header">Automata &amp; Formal Language Theory
                <small>Item Subheading</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <img class="img-responsive" src="../pictures/automata/automata.png" alt="">
        </div>

        <div class="col-md-4">
            <h3>Finite Automata Project</h3>
            <p>This project involved creating a data structure that modeled a Nondeterministic and Determinitistic Finite Automaton(NFA &amp;DFA).
            The end result was a program that modeled the data structure by implementing a number of methods that modeled
            the various operations(union, epsilon closure, determining regular expressions).</p>
            <h3>Project Details</h3>
            <ul>
                <li>The code for the project can be downloaded <a href="../code/automata.zip">here</a>.</li>
                <li>The project can be run by compiling the Java files included in the zip folder.
                Several files ask for user interaction to build a DFA/NFA and then do a specified operation on it.</li>
                <li>Challenges</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <?php
      include '../project_randomizer.php';
     ?>
    <!-- Related Projects Row -->
    <!-- <div class="row">

        <div class="col-lg-12">
            <h3 class="page-header">Related Projects</h3>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

    </div> -->
    <!-- /.row -->
  <!-- Footer here, can add this to other pages later. -->
  <!-- <br><br><br><br><br>
  <div class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">
        <p class="navbar-text pull-left">© 2017</p>
      </div>
  </div> -->
  </body>
  </html>
