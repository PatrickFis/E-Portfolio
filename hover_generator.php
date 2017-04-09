<?php

  // Contains the projects that will be randomly selected to be displayed on
  // the homepage
  $projects = array('/courses/automata.php', '/courses/compiler.php', '/courses/datastruct.php',
                    '/courses/infosec.php', '/courses/mobile.php', '/courses/numerical.php',
                    '/courses/object.php', '/courses/operatingsystems.php', '/courses/softwareeng.php',
                    '/extra/ccdc.php', '/extra/genetics.php', '/extra/icpc.php',
                    '/extra/hacknashville.php');
  // Contains the pictures used for each project. MUST BE IN THE SAME ORDER
  // AS THE ABOVE ARRAY.
  $pictures = array('/pictures/automata/automata_tn.png', '/pictures/compiler/compiler_tn.png', '/pictures/datastruct/avl_tn.png',
                    '/pictures/infosec/pic1_tn.png', '/pictures/mobile_distributed/4_11_tn.png', '/pictures/numerical/gauss_tn.png',
                    '/pictures/object_oriented/object_tn.png', '/pictures/operatingsystems/simple_shell_tn.png', '/pictures/softwareeng/homepage_tn.png',
                    '/pictures/seccdc/prelim_tn.jpg', '/pictures/genetics/report_viewer_tn.png', '/pictures/icpc/comp_tn.jpg',
                    '/pictures/hacknashville/hack1_tn.jpg');
  $descriptions = array('Automata &amp; Formal Language Theory', 'Compiler Construction', 'Data Structures &amp; Algorithms',
                        'Fundamentals of Information Security', 'Mobile &amp; Distributed Computing', 'Numerical Methods',
                        'Object-Oriented Programming', 'Operating Systems', 'Software Engineering',
                        'SECCDC', 'Genetics Associates', 'ACM ICPC',
                        'Hack Nashville 6');

  // Choose six random projects
  $chosenArray = array();
  for($i = 0; $i < count($projects); $i++) {
    if(count($chosenArray) < 6) {
      $randInt = rand(0, count($projects)-1);
      if(in_array($randInt, $chosenArray)) {
        $i--;
      }
      else {
        array_push($chosenArray, $randInt);
      }
    }
    else {
      break;
    }
  }
  // Page content
  echo '<div class="container-fluid">';
  // Row 1
  echo '<div class="row">';
  // col 1
  echo '<div class="col-lg-4 col-sm-6">';
  echo '<div class-"portfolio-box">';
  echo '<a href="'.$projects[$chosenArray[0]].'" class="portfolio-box">';
  echo '<img src="'.$pictures[$chosenArray[0]].'" class="img-responsive">';
  echo '<div class="portfolio-box-caption">';
  echo '<div class="portfolio-box-caption-content">';
  echo '<div class="project-category text-faded">'.$descriptions[$chosenArray[0]].'</div>';
  echo '</div>';
  echo '</div>';
  echo '</a>'; // link
  echo '</div>';
  echo '</div>';

  //col 2
  echo '<div class="col-lg-4 col-sm-6">';
  echo '<div class-"portfolio-box">';
  echo '<a href="'.$projects[$chosenArray[1]].'" class="portfolio-box">';
  echo '<img src="'.$pictures[$chosenArray[1]].'" class="img-responsive">';
  echo '<div class="portfolio-box-caption">';
  echo '<div class="portfolio-box-caption-content">';
  echo '<div class="project-category text-faded">'.$descriptions[$chosenArray[1]].'</div>';
  echo '</div>';
  echo '</div>';
  echo '</a>'; // link
  echo '</div>';
  echo '</div>';

  //col 3
  echo '<div class="col-lg-4 col-sm-6">';
  echo '<div class-"portfolio-box">';
  echo '<a href="'.$projects[$chosenArray[2]].'" class="portfolio-box">';
  echo '<img src="'.$pictures[$chosenArray[2]].'" class="img-responsive">';
  echo '<div class="portfolio-box-caption">';
  echo '<div class="portfolio-box-caption-content">';
  echo '<div class="project-category text-faded">'.$descriptions[$chosenArray[2]].'</div>';
  echo '</div>';
  echo '</div>';
  echo '</a>'; // link
  echo '</div>';
  echo '</div>';
  echo '</div>';
  // Row 2
  echo '<div class="row">';

  // col 1
  echo '<div class="col-lg-4 col-sm-6">';
  echo '<div class-"portfolio-box">';
  echo '<a href="'.$projects[$chosenArray[3]].'" class="portfolio-box">';
  echo '<img src="'.$pictures[$chosenArray[3]].'" class="img-responsive">';
  echo '<div class="portfolio-box-caption">';
  echo '<div class="portfolio-box-caption-content">';
  echo '<div class="project-category text-faded">'.$descriptions[$chosenArray[3]].'</div>';
  echo '</div>';
  echo '</div>';
  echo '</a>'; // link
  echo '</div>';
  echo '</div>';

  //col 2
  echo '<div class="col-lg-4 col-sm-6">';
  echo '<div class-"portfolio-box">';
  echo '<a href="'.$projects[$chosenArray[4]].'" class="portfolio-box">';
  echo '<img src="'.$pictures[$chosenArray[4]].'" class="img-responsive">';
  echo '<div class="portfolio-box-caption">';
  echo '<div class="portfolio-box-caption-content">';
  echo '<div class="project-category text-faded">'.$descriptions[$chosenArray[4]].'</div>';
  echo '</div>';
  echo '</div>';
  echo '</a>'; // link
  echo '</div>';
  echo '</div>';

  //col 3
  echo '<div class="col-lg-4 col-sm-6">';
  echo '<div class-"portfolio-box">';
  echo '<a href="'.$projects[$chosenArray[5]].'" class="portfolio-box">';
  echo '<img src="'.$pictures[$chosenArray[5]].'" class="img-responsive">';
  echo '<div class="portfolio-box-caption">';
  echo '<div class="portfolio-box-caption-content">';
  echo '<div class="project-category text-faded">'.$descriptions[$chosenArray[5]].'</div>';
  echo '</div>';
  echo '</div>';
  echo '</a>'; // link
  echo '</div>';
  echo '</div>';

  echo '</div>';

  echo '</div>';
 ?>
