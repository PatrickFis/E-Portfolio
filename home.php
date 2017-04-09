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
    <link href="css/creative.min.css" rel="stylesheet">
    <style>
      .dropdown-backdrop {
        position: static;
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
                        <a class="page-scroll" href="#contact">Contact Me</a>
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
                        <li><a href="/courses/softwareeng.php">Software Engineering</a></li>
                        <li><a href="/courses/datastruct.php">Data Structures</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class ="dropdown-toggle" data-toggle="dropdown" href="#">Extracurriculars
                        <span class="caret"></a>
                        <ul class="dropdown-menu">
                          <li><a href="/extra/icpc.php">ICPC</a></li>
                          <li><a href="/extra/ccdc.php">SECCDC</a></li>
                          <li><a href="/extra/genetics.php">Genetics Associates</a></li>
                          <li><a href="/extra/hacknashville.php">Hack Nashville 6</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Documents
                        <span class="caret"></a>
                      <ul class="dropdown-menu">
                        <li><a href="/docs/Resume.pdf">Resume</a></li>
                        <li><a href="/docs/AcademicReflectionRevised.docx">Education Reflection</a></li>
                        <li><a href="/docs/ServiceReflectionOutline.docx">Service Reflection</a></li>
                        <li><a href="/docs/WorkReflection.docx">Work Reflection</a></li>
                      </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Patrick Fischer</h1>
                <hr>
                <p>Welcome to my e-portfolio!</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Introductory Information</h2>
                    <hr class="light">
                    <p class="text-faded">Info about me</p>
                    <a href="#portfolio" class="page-scroll btn btn-default btn-xl sr-button">Portfolio</a>
                </div>
            </div>
        </div>
    </section>
    <section class = "no-padding" id="portfolio">
      <?php
        include 'hover_generator.php';
       ?>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contact Me</h2>
                    <hr class="primary">
                    <p>Please contact me on LinkedIn</p>
                </div>
                <div class="col-lg-4 col-lg-offset-4 text-center">
                    <div class="LI-profile-badge"  data-version="v1" data-size="large" data-locale="en_US" data-type="vertical" data-theme="dark" data-vanity="patrick-fischer-32a219a1"><a class="LI-simple-link" href='https://www.linkedin.com/in/patrick-fischer-32a219a1?trk=profile-badge'>Patrick Fischer</a></div>
                </div>
                <!-- <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div> -->
            </div>
        </div>
    </section>

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
