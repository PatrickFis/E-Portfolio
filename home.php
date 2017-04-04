<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <?php
  include 'navbar.php';
  ?>
  <div class="jumbotron">
    <div class="container text-center" style="background-color: lightblue !important">
      <h1>Patrick Fischer</h1>
      <p>Under Construction...</p>
    </div>
  </div>

    <div class="container-fluid bg-3 text-center">
      <h3>Some of my Work</h3><br>
      <div class="row">
        <div class="col-sm-3">
          <p>Compiler Construction</p>
          <a href="courses/compiler.php"><img src="pictures/compiler/compiler.png" class="img-responsive" style="width:100%" alt="Image"></a>
        </div>
        <div class="col-sm-3">
          <p>Mobile &amp; Distributed Computing</p>
          <a href="courses/mobile.php"><img src="pictures/mobile_distributed/mobile.png" class="img-responsive" style="width:100%" alt="Image"></a>
        </div>
        <div class="col-sm-3">
          <p>Automata &amp; Formal Language Theory</p>
          <a href="courses/automata.php"><img src="pictures/automata/automata.png" class="img-responsive" style="width:100%" alt="Image"></a>
        </div>
        <div class="col-sm-3">
          <p>Object-Oriented Programming</p>
          <a href="courses/object.php"><img src="pictures/object_oriented/object.png" class="img-responsive" style="width:100%" alt="Image"></a>
        </div>
      </div>
    </div><br>
    <!-- <div class="container-fluid">
      <p>Three sentences for reflection papers:</p>
      <p>Academic: I'll write about some of my more difficult classes(like compiler construction).</p>
      <p>Service: I'll write about service work that I've done through Lipscomb(SALT and some other work).</p>
      <p>Work: I'll write about my internship at Genetics Associates.</p>
    </div>
  </div> -->
  <!-- LinkedIn badge -->
  <!-- <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="horizontal" data-theme="light" data-vanity="patrick-fischer-32a219a1"><a class="LI-simple-link" href='https://www.linkedin.com/in/patrick-fischer-32a219a1?trk=profile-badge'>Patrick Fischer</a></div> -->
</body>

<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
</html>
