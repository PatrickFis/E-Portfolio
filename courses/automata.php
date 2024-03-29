<!DOCTYPE html>
<html>
<head>
  <title>Automata &amp; Formal Language Theory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="/css/style.css"> -->
  <!-- Bootstrap Core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS -->
  <link href="/css/creative.css" rel="stylesheet">

  <style>
  .navbar-default {
    background-color: white;
    border-color: rgba(34, 34, 34, 0.05);
    font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
    -webkit-transition: all 0.35s;
    -moz-transition: all 0.35s;
    transition: all 0.35s;
  }
  .navbar-default .navbar-header .navbar-brand {
    color: #F05F40;
    font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
    font-weight: 700;
    text-transform: uppercase;
  }
  .navbar-default .navbar-header .navbar-brand:hover,
  .navbar-default .navbar-header .navbar-brand:focus {
    color: #eb3812;
  }
  .navbar-default .navbar-header .navbar-toggle {
    font-weight: 700;
    font-size: 12px;
    color: #222222;
    text-transform: uppercase;
  }
  .navbar-default .nav > li > a,
  .navbar-default .nav > li > a:focus {
    text-transform: uppercase;
    font-weight: 700;
    font-size: 13px;
    color: #222222;
  }
  .navbar-default .nav > li > a:hover,
  .navbar-default .nav > li > a:focus:hover {
    color: #F05F40;
  }
  .navbar-default .nav > li.active > a,
  .navbar-default .nav > li.active > a:focus {
    color: #F05F40 !important;
    background-color: transparent;
  }
  .navbar-default .nav > li.active > a:hover,
  .navbar-default .nav > li.active > a:focus:hover {
    background-color: transparent;
  }
  </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body id="page-top">

  <?php
  	include '../new_navbar.php';
  ?>


    <!-- Testing portfolio item from Github -->
    <!-- Page Content -->
    <!-- Margin added to fix navbar issues -->
    <div class="hidden-lg hidden-md visible-sm visible-xs">
      <br/>
      <br/>
      <br/>
    </div>
    <div class="container" style="margin-top:10px;">

    <!-- Portfolio Item Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Automata &amp; Formal Language Theory
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
                <img src="/pictures/automata/eclosure.png" alt="Epsilon Closure">
                <div class="carousel-caption">
                  <h3 style="color:black;">Epsilon Closure</h3>
                  <p style="color:black;">Calculates the Epsilon Closure of a state</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/automata/nfa.png" alt="NFA">
                <div class="carousel-caption">
                  <h3 style="color:black;">NFA</h3>
                  <p style="color:black;">Translates an NFA to a DFA</p>
                </div>
              </div>

              <div class="item">
                <img src="/pictures/automata/gnfa.png" alt="GNFA">
                <div class="carousel-caption">
                  <h3 style="color:black;">GNFA</h3>
                  <p style="color:black;">Output from previous slide</p>
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
            <h3>Automata &amp; Formal Language Theory</h3>
            <p>This course introduced me to concepts form automata theory and formal languages. These include
            finite automata, regular expressions, formal language theory, and pushdown automata. The course included
            a semester long project which involved creating a data structure that modeled a Nondeterministic and Determinitistic Finite Automaton(NFA &amp; DFA).
            The end result was a program that modeled the data structure by implementing a number of methods that modeled
            the various operations(union, epsilon closure, determining regular expressions).</p>
            <h3>Project Details</h3>
            <ul>
                <li>The code for the project can be downloaded <a href="../code/automata.zip">here</a>.</li>
                <li>The project can be run by compiling the Java files included in the zip folder.
                Several files ask for user interaction to build a DFA/NFA and then do a specified operation on it.</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!--  Random other projects -->
    <?php
      include '../project_randomizer.php';
     ?>
  </body>
  <!-- jQuery -->
  <script src="/vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="/vendor/scrollreveal/scrollreveal.min.js"></script>
  <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Theme JavaScript -->
  <script src="/js/creative.min.js"></script>

  </html>
