<?php

$title = 'Exercice5';

include 'header.php';
$date1 = new DateTime();
$date2 = new DateTime("2016-05-16");
$diff = $date2->diff($date1)->format("%R %a");
echo $diff;
include 'footer.php';?>