<?php
    include_once('./pokemon.php');
    include_once('./pokeball.php');

    $aspifion = new Pokemon('Aspifion', 50, 100, 1, 5);
    $aspifouette = new Pokemon('Aspifouette', 150, 150, 5, 10);

    $masterBall = new Pokeball('MasterBall', 5);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TP_Pokemon</title>
    </head>
    <body>
        <?php
            $aspifion->attack($aspifouette);
            $masterBall->capture($aspifion);
        ?>
    </body>
</html>