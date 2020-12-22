<?php

$fahr = $_GET["fahr"];

$cels = ($fahr - 32) * 5/9;

echo $cels;

?>
