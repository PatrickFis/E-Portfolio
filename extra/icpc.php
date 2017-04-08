<!DOCTYPE html>
<html>
<head>
  <title>ACM ICPC</title>
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
            <h1 class="page-header">ACM ICPC Programming Competition
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
                <img src="../pictures/icpc/comp.JPG" alt="At the programming competition">
                <div class="carousel-caption">
                  <h3>ACM Preliminary Round</h3>
                </div>
              </div>

              <div class="item">
                <img src="../pictures/icpc/mid_comp.JPG" alt="At the programming competition">
                <div class="carousel-caption">
                  <h3>ACM Preliminary Round</h3>
                </div>
              </div>

              <div class="item">
                <img src="../pictures/icpc/comp2.JPG" alt="At the programming competition">
                <div class="carousel-caption">
                  <h3>ACM Preliminary Round</h3>
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
            <h3>ACM ICPC Programming Competition</h3>
            <h3>Details</h3>
            <ul>
                <li>Competed in the 2014 and 2016 competitions</li>
                <li>The ACM International Collegiate Programming Competition (ICPC) provides
                real world programming problems to students. These problems range from
                fairly simple tasks to extremely difficult problems requiring a variety
                of algorithms and creative thinking to solve.</li>
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
