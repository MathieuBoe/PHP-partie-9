<?php 
$title = 'Exercice3';
include 'header.php';
$date1 = date('Y-m-d'); // Date du jour
setlocale(LC_TIME, "fr_FR.UTF-8");
echo strftime("%A %d %B %G", time());
include 'footer.php';?>