<?php

require "../vendor/autoload.php";

use App\Hello;

$beNice = new Hello();
echo $beNice->talk();

?>