<?php
  // Produces random links to various projects

  echo '<div class="row">';

  echo '<div class="col-lg-12">';
  echo '<h3 class="page-header">Other Projects</h3>';
  echo '</div>';

  // Contains the projects that will be randomly selected and placed at the end of certain pages.
  $projects = array('/courses/automata.php', '/courses/compiler.php', '/courses/datastruct.php',
                    '/courses/infosec.php', '/courses/mobile.php', '/courses/numerical.php',
                    '/courses/object.php', '/courses/operatingsystems.php', '/courses/softwareeng.php',
                    '/extra/ccdc.php', '/extra/genetics.php', '/extra/icpc.php',
                    '/extra/hacknashville.php', '/courses/dbms.php', '/courses/design.php');
  // Contains the pictures used for each project. MUST BE IN THE SAME ORDER AS THE ABOVE ARRAY.
  $pictures = array('/pictures/automata/automata.png', '/pictures/compiler/compiler.png', '/pictures/datastruct/avl.png',
                    '/pictures/infosec/pic1.png', '/pictures/mobile_distributed/10_6.png', '/pictures/numerical/gauss.png',
                    '/pictures/object_oriented/object.png', '/pictures/operatingsystems/simple_shell.png', '/pictures/softwareeng/homepage.png',
                    '/pictures/seccdc/group_pic.jpg', '/pictures/genetics/report_viewer.png', '/pictures/icpc/comp.JPG',
                    '/pictures/hacknashville/hack1.jpg', '/pictures/dbms/q5.png', '/pictures/design/mergesort.png');
  $descriptions = array('Automata &amp; Formal Language Theory', 'Compiler Construction', 'Data Structures &amp; Algorithms',
                        'Fundamentals of Information Security', 'Mobile &amp; Distributed Computing', 'Numerical Methods',
                        'Object-Oriented Programming', 'Operating Systems', 'Software Engineering',
                        'SECCDC', 'Genetics Associates', 'ACM ICPC',
                        'Hack Nashville 6', 'Database Management Systems', 'Design &amp; Analysis of Algorithms');

  // Choose four random projects
  $chosenArray = array();
  for($i = 0; $i < count($projects); $i++) {
    if(count($chosenArray) < 4) {
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
  // Debug
  // print_r(array_values($chosenArray));

  // HTML for the projects
  for($i = 0; $i < count($chosenArray); $i++) {
    // echo '<div class="col-sm-3 col-xs-6">';
    // echo '<a href="'.$projects[$chosenArray[$i]].'">';
    // echo '<img class="img-responsive portfolio-item" style="height:200px;width:250px;" src="'.$pictures[$chosenArray[$i]].'" alt="">';
    // echo '</a>';
    // echo '</div>';
    echo '<div class="col-sm-3 col-xs-6">';
    echo '<div class-"portfolio-box">';
    echo '<a href="'.$projects[$chosenArray[$i]].'" class="portfolio-box">';
    echo '<img src="'.$pictures[$chosenArray[$i]].'" class="img-responsive" style="height:200px;width:270px;">';
    echo '<div class="portfolio-box-caption">';
    echo '<div class="portfolio-box-caption-content">';
    echo '<div class="project-category text-faded">'.$descriptions[$chosenArray[$i]].'</div>';
    echo '</div>';
    echo '</div>';
    echo '</a>'; // link
    echo '</div>';
    echo '</div>';
  }
  echo '</div>';
 ?>
