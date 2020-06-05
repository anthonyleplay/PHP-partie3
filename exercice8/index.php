<?php
$result = '';

for ($x = 200; $x >= 0; $x-=12) {
    $result .= "Enfin !!!!." . "<br>";
}
?> 

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo8</title>
</head>

<body>
    <h1>Exercice 8</h1>

    <p>En allant de 200 à 0 avec un pas de 12, afficher le message <b>Enfin !!!!.</b></p>

    <p>===================================</p>

    <p><?= $result ?></p>


</body>

</html>