<?php
$result = '';

for ($x = 20; $x >= 0; $x--) {
    $result .= "C'est presque bon." . "<br>";
}
?> 

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo6</title>
</head>

<body>
    <h1>Exercice 6</h1>

    <p>En allant de 20 à 0 avec un pas de 1, afficher le message <b>C'est presque bon.</b></p>

    <p>===================================</p>

    <p><?= $result ?></p>


</body>

</html>