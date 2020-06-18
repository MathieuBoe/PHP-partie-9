<?php 
$title = 'Exercice1';
include 'header.php';
echo date("d/m/Y");


// Possibilité 1
    // Retourne une date sous forme d'une chaîne, au format donné par le paramètre format, fournie par le paramètre timestamp ou la date et l'heure courantes si aucun timestamp n'est fourni. En d'autres termes, le paramètre timestamp est optionnel et vaut par défaut la valeur de la fonction time().
    $date_slash = date('d/m/Y'); // ex 1
    $date_dash = date('d-m-Y');    // ex 2

    // Possibilité 2
    $date_slash_2 = new DateTime(); // ex 1
    $date_dash_2 = new DateTime();    // ex 2

    // Possibilité 3
    $date_slash_3 = date_create(); // ex 1
    $date_dash_3 = date_create(); // ex 2
?>
<h1>Exercice 1</h1>
    <div>Date du jour (methode date()): <strong><?= $date_slash; ?></strong></div>
    <div>Date du jour (methode DateTime()) : <strong><?= $date_dash_2 -> format('d/m/Y'); ?></strong></div>
    <div>Date du jour (methode date_create()) : <strong><?= date_format($date_slash_3, 'd/m/Y'); ?></strong></div>
include 'footer.php';?>