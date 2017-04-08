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
  <!-- <div class="container">
    <div class="jumbotron" >
      <div class="container text-center">
        <h1>Patrick Fischer</h1>
        <p>Under Construction...</p>
      </div>
    </div> -->
  <?php
    include 'home_generator.php';
   ?>
   <div class="container">
      <?php
        include 'project_randomizer.php';
       ?>
   </div>
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
