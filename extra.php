<!DOCTYPE html>
<html>
<head>
  <title>Courses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <?php
  	include 'navbar.php';
  ?>
    <div class="container">
      <div class="page-header">
        <h1>Patrick Fischer</h1>
      </div>

      <div class="row">
          <ul class="nav nav-tabs-no-style nav-stacked col-md-3">
            <li class="active"><a data-toggle="tab" href="#Tab1">Internships</a></li>
            <li><a data-toggle="tab" href="#Tab2">Work Experience</a></li>
            <li><a data-toggle="tab" href="#Tab3">UPE</a></li>
            <li><a data-toggle="tab" href="#Tab4">Future Use</a></li>
          </ul>
          <div class="col-md-6">
            <div class="tab-content">
              <div id="Tab1" class="tab-pane fade in active">
                <h3>Internships</h3>
                <p>Genetics Associates</p>
                <p>Information about my internship at Genetics Associates will go here.</p>
              </div>
              <div id="Tab2" class="tab-pane fade">
                <h3>Teacher's Assitant at Lipscomb University</h3>
                <p>Information about my work at Lipscomb University will go here.</p>
              </div>
              <div id="Tab3" class="tab-pane fade">
                <h3>Upsilon Pi Epsilon</h3>
                <p>Information about UPE will go here.
              </div>
              <div id="Tab4" class="tab-pane fade">
                <h3>Will use later in the semester.</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
  <!-- Footer here, can add this to other pages later. -->
  <br><br><br><br><br>
  <div class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">
        <p class="navbar-text pull-left">© 2017</p>
      </div>
  </div>
  </body>
  </html>
