<?php
$title = 'Exercice7';
include 'header.php';
$NewDate=Date('d/m/Y', strtotime('+20 days'));
echo $NewDate;
include 'footer.php';?>