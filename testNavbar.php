<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Patrick Fischer's E-Portfolio</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <!-- <link href="css/creative.min.css" rel="stylesheet"> -->
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
      .navbar-default {
        background-color: transparent;
        border-color: rgba(255, 255, 255, 0.3);
      }
      .navbar-default .navbar-header .navbar-brand {
        color: rgba(255, 255, 255, 0.7);
      }
      .navbar-default .navbar-header .navbar-brand:hover,
      .navbar-default .navbar-header .navbar-brand:focus {
        color: white;
      }
      .navbar-default .nav > li > a,
      .navbar-default .nav > li > a:focus {
        color: rgba(255, 255, 255, 0.7);
      }
      .navbar-default .nav > li > a:hover,
      .navbar-default .nav > li > a:focus:hover {
        color: white;
      }
      .navbar-default.affix {
        background-color: white;
        border-color: rgba(34, 34, 34, 0.05);
      }
      .navbar-default.affix .navbar-header .navbar-brand {
        color: #F05F40;
        font-size: 14px;
      }
      .navbar-default.affix .navbar-header .navbar-brand:hover,
      .navbar-default.affix .navbar-header .navbar-brand:focus {
        color: #eb3812;
      }
      .navbar-default.affix .nav > li > a,
      .navbar-default.affix .nav > li > a:focus {
        color: #222222;
      }
      .navbar-default.affix .nav > li > a:hover,
      .navbar-default.affix .nav > li > a:focus:hover {
        color: #F05F40;
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

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Patrick Fischer's E-Portfolio</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Courses
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/courses/object.php">Object-Oriented Programming</a></li>
                        <li><a href="/courses/automata.php">Automata &amp; Formal Language Theory</a></li>
                        <li><a href="/courses/compiler.php">Compiler Construction</a></li>
                        <li><a href="/courses/mobile.php">Mobile &amp; Distributed Computing</a></li>
                        <li><a href="/courses/infosec.php">Information Security</a></li>
                        <li><a href="/courses/numerical.php">Numerical Methods</a></li>
                        <li><a href="/courses/operatingsystems.php">Operating Systems</a></li>
                        <li><a href="/courses/softwareeng.php">Software Engineering</a><li>
                        <li><a href="/courses/datastruct.php">Data Structures</a><li>
                        <!-- <li><a href="/courses/courses.php">Software Engineering</a></li> -->
                      </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- <header>
        <div class="header-content hidden">

        </div>
    </header> -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

    <!-- LinkedIn -->
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
</body>

</html>
