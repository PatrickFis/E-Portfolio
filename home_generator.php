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

  // Page content

  echo '<div>';

  echo '<div class="container">';

  echo '<div class="container">';
  echo '<img class="img-circle img-responsive pull-right" src="http://placehold.it/500x500">'
  echo '<h2>Test heading<span>Test subheading</span></h2>';
  echo '<p class="lead">Test paragraph</p>';
  echo '</div>';

  echo '</div>';



 ?>
