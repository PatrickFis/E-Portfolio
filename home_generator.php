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
  $pictures = array('/pictures/automata/automata.png', '/pictures/compiler/compiler.png', '/pictures/datastruct/avl.png',
                    '/pictures/infosec/pic1.png', '/pictures/mobile_distributed/10_6.png', '/pictures/numerical/gauss.png',
                    '/pictures/object_oriented/object.png', 'http://placehold.it/500x500', 'http://placehold.it/500x500',
                    '/pictures/seccdc/group_pic.jpg', 'http://placehold.it/500x500', '/pictures/icpc/comp.JPG',
                    '/pictures/hacknashville/hack1.jpg');


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
  echo '<a href="'.$projects[$chosenArray[0]].'"><img class="img-circle img-responsive pull-right" height="500" width="500" src="'.$pictures[$chosenArray[0]].'"></a>';
  echo '<h2>Welcome to Patrick Fischer\'s E-Portfolio</h2>';
  echo '<p class="lead">Click on any of the images to learn more about some of my projects</p>';
  echo '</div>';

  echo '<div class="container">';
  echo '<a href="'.$projects[$chosenArray[1]].'"><img class="img-circle img-responsive pull-left" height="500" width="500" src="'.$pictures[$chosenArray[1]].'"></a>';
  echo '<h2>Test heading</h2>';
  echo '<p class="lead">Test paragraph</p>';
  echo '</div>';

  echo '<div class="container">';
  echo '<a href="'.$projects[$chosenArray[2]].'"><img class="img-circle img-responsive pull-right" height="500" width="500" src="'.$pictures[$chosenArray[2]].'"></a>';
  echo '<h2>Test heading</h2>';
  echo '<p class="lead">Test paragraph</p>';
  echo '</div>';

  echo '</div>';



 ?>
