<?php
$result = '';

for ($x = 1; $x <= 100; $x+=15) {
    $result .= "On tient le bon bout." . "<br>";
}
?> 

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo7</title>
</head>

<body>
    <h1>Exercice 7</h1>

    <p>En allant de 1 à 100 avec un pas de 15, afficher le message <b>On tient le bon bout.</b></p>

    <p>===================================</p>

    <p><?= $result ?></p>


</body>

</html>