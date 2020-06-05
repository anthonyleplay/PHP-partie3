<?php
$nombre = 1;
$result = $nombre . "<br>";

while ($nombre < 10) {
    $nombre = $nombre + $nombre / 2 ;
    $result .= $nombre . "<br>";
    } ;
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4</title>
</head>

<body>
    <h1>Exercice 4</h1>

    <p>Créer une variable et l'initialiser à 1. <br>
        Tant que cette variable n'atteint pas 10, il faut :</p>

    <ul>
        <li>l'afficher</li>
        <li>l'incrementer de la moitié de sa valeur</li>
    </ul>

    <p>===================================</p>

    <p><?= $result ?></p>


</body>

</html>