<?php

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


  // Choose three random projects
  $chosenArray = array();
  for($i = 0; $i < count($projects); $i++) {
    if(count($chosenArray) < 3) {
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

  echo '<div>';

  echo '<div class="container">';

  echo '<div class="container">';
  echo '<img class="img-circle img-responsive pull-right" height="500" width="500" src="'.$pictures[$chosenArray[0]].'">';
  echo '<h2>Test heading</h2>';
  echo '<p class="lead">Test paragraph</p>';
  echo '</div>';

  echo '<div class="container">';
  echo '<img class="img-circle img-responsive pull-left" height="500" width="500" src="'.$pictures[$chosenArray[1]].'">';
  echo '<h2>Test heading</h2>';
  echo '<p class="lead">Test paragraph</p>';
  echo '</div>';

  echo '<div class="container">';
  echo '<img class="img-circle img-responsive pull-right" height="500" width="500" src="'.$pictures[$chosenArray[2]].'">';
  echo '<h2>Test heading</h2>';
  echo '<p class="lead">Test paragraph</p>';
  echo '</div>';

  echo '</div>';



 ?>
