<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
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
      <p>Most of my work has been on adding a framework to my courses page to use for future work and an outline of what I would like to have on my extracurriculars page.</p>
    </div>

    <div class="container-fluid bg-3 text-center">
      <h3>Some of my Work</h3><br>
      <div class="row">
        <div class="col-sm-3">
          <p>Compiler Construction</p>
          <a href="courses.php"><img src="pictures/compiler/compiler.png" class="img-responsive" style="width:100%" alt="Image"></a>
        </div>
        <div class="col-sm-3">
          <p>Software Engineering</p>
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-3">
          <p>Automata &amp; Formal Language Theory</p>
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-3">
          <p>Object-Oriented Programming</p>
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
      </div>
    </div><br>
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
