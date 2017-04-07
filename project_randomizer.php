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
                    '/extra/ccdc.php', '/extra/genetics.php', '/extra/icpc.php');
  // Contains the pictures used for each project. MUST BE IN THE SAME ORDER AS THE ABOVE ARRAY.
  $pictures = array('/pictures/automata/automata.png', '/pictures/compiler/compiler.png', 'http://placehold.it/500x300',
                    '/pictures/infosec/pic1.png', '/pictures/mobile_distributed/mobile.png', '/pictures/numerical/gauss.png',
                    '/pictures/object_oriented/object.png', 'http://placehold.it/500x300', 'http://placehold.it/500x300',
                    '/pictures/seccdc/group_pic.jpg', 'http://placehold.it/500x300', '/pictures/icpc/acm.jpg');

  $chosenArray = array();
  for($i = 0; $i < count($projects); $i++) {
    if(count($chosenArray) < 4) {
      $randInt = rand(0, count($projects)-1);
      if(in_array($chosenArray, $randInt)) {
        $i--;
      }
      else {
        array_push($chosenArray, $randInt);
      }
    }
  }

  for($i = 0; $i < count($chosenArray); $i++) {
    echo '<div class="col-sm-3 col-xs-6">';
    echo '<a href="'.$projects[$chosenArray[$i]].'">';
    echo '<img class="img-responsive portfolio-item" src="'.$pictures[$chosenArray[$i]].'" alt="">';
    echo '</a>';
    echo '</div>';
  }
  echo '</div>';
 ?>
