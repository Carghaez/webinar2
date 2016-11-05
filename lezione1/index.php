<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />

  <title>1° Lezione di PHP</title>
</head>
<body>
<script type="text/javascript">
  var variabile = 'Qualcosa...';
</script>
<?php

  $var = [
    'nickname' => 'Toy',
    'name' => 'Salvatore',
    'surname' => 'NonRicordo'
  ];
  var_dump($var);

  if ( isset($_GET['user_name']) && isset($_GET['user_surname']) ) {
    echo 'Benvenuto ' . $_GET['user_name'] . ' ' . $_GET['user_surname'];
  }

  foreach ($var as $key => $value) {
    echo "<pre>key: {$_GET['user']}, value: $value\r\n";
    echo 'key: $key, value: $value\r\n</pre>';
  }


$fruits = [
  "d" => "lemon",
  "a" => "orange",
  "b" => "banana",
  "c" => "apple"
];

function funzione_frutta($value, $key)
{
    echo "$key. $value<br />\n";
}

array_walk($fruits, 'funzione_frutta');

foreach ($fruits as $key => $value) {
    funzione_frutta($value, $key);
}
?>


<?php
  include_once 'test_toy.php';
  include 'test_toy.php';
  include_once 'test_toy.php';
  include 'test_toy.php';
?>
</body>
</html>