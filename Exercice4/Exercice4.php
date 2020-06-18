<?php
$title = 'Exercice4';
include 'header.php';
setlocale(LC_TIME, "fr_FR.UTF-8");
// echo mktime(15,0,0,8,2,2016) . " secondes"; ;
echo strftime("%A %d %B %G %H:%M:%S", 1470142800) ;
$timestamp1 = time();
$timestamp2 = strtotime('Tuesday 2 August 2016 15hours'); ?>
<p><?= $timestamp1; ?></p>
<p><?= $timestamp2; ?></p>
<?php include 'footer.php';?>