<?php
include 'inc/core/functions.php';

$page = getPage();

include 'inc/template-parts/header.php';

include "inc/$page.php";

include 'inc/template-parts/footer.php';
