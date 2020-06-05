<?php
$result = '';

for ($x = 1; $x <= 15; $x++) {
  $result .= "On y arrive presque." . "<br>";
}
?> 

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo5</title>
</head>

<body>
    <h1>Exercice 5</h1>

    <p>En allant de 1 à 15 avec un pas de 1, afficher le message <b>On y arrive presque.</b></p>

    <p>===================================</p>

    <p><?= $result ?></p>


</body>

</html>