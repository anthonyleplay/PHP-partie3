<?php
$nombre = 0;
$multiplier = 5;
$result = $nombre * $multiplier . "<br>";

while ($nombre < 20) {
    $nombre ++;
    $result .= $nombre * $multiplier . "<br>";
    } ;
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>

<body>
    <h1>Exercice 2</h1>

    <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100. <br>
        Tant que la première variable n'est pas supérieure à 20 :</p>


    <ul>
        <li>multiplier la première variable avec la deuxième</li>
        <li>afficher le résultat</li>
        <li>incrementer la première variable</li>
    </ul>

    <p>===================================</p>

    <p><?= $result ?></p>


</body>

</html>