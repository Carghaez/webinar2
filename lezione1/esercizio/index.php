<?php
  include 'inc/conf/functions.php';

  define('PIPPOPLUTO', true);

  $page = getPage();

  // Includo le variabili generali di quella pagina
  include "inc/template-vars/$page.php";
?>

<?php
  // Inclusione Header
  include 'inc/template-parts/header.php';
  include 'inc/template-parts/menu.php';
  // Inclusione Content
  include "inc/$page.php";
  // Inclusione footer
  include 'inc/template-parts/footer.php';
  include 'inc/template-parts/before_body_close.php';
?>