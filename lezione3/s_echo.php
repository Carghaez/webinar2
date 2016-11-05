<?php
session_start();

$chiave = $_SESSION['chiave'];

echo "il valore della chiave è {$chiave}";
