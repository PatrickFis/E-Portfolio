<!DOCTYPE html>
<html>
<head>
  <title>Mobile &amp; Distributed Computing</title>
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
            <h1 class="page-header">Mobile &amp; Distributed Computing
                <small>Item Subheading</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <img class="img-responsive" src="../pictures/mobile_distributed/mobile.png" alt="">
        </div>

        <div class="col-md-4">
            <h3>Project Description</h3>
            <p>Project info will go here: Will showcase various projects for
            this independent study.</p>
            <h3>Project Details</h3>
            <ul>
                <li>Code</li>
                <li>Function</li>
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
