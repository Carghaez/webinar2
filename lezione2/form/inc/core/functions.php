<?php
function getPage()
{
  // Seleziono la pagina richiesta dall'utente
  // Se non è settata alcuna pagina
  // mostro la home.php
  $page = ( isset($_GET['page']) )
    ? $_GET['page'] // caso vero
    : 'home'; // caso falso

  if (!file_exists('inc/' . $page . '.php')) {
    $page = '404';
  }

  return $page;
}