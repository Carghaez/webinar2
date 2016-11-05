<?php

// Costanti e variabili
$pluto = 'pippo<br />';
echo $pluto;
$pluto .= 'baudo';
echo $pluto;
unset($pluto);
echo $pluto;

define('costante', 'paperino');

echo costante;
unset(costante);
define('costante', 'baudo');
echo costante;
