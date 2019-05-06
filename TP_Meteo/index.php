<?php

$text_color = 'black';
$background_color = 'white';
$date = date('d/m/Y');
$heure = date('H:i');

if (intval($heure) > 7 && intval($heure) < 19) 
{
    $text_color = 'black';
    $background_color = 'white';
} else 
{
    $text_color = 'white';
    $background_color = 'black';
}

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <style>
            body, html {
                color: <?= $text_color ?>;
                background: <?= $background_color ?>;
            }
            
        </style>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Site Météo</title>
    </head>
    <body>
        <p>
            <?php 
                echo 'Le ' . $date . ' à ' . $heure;
            ?>
        </p>
        <p>
            <a href="./paris.php">Météo de Paris</a>
        </p>
        <p>
            <a href="./bordeaux.php">Météo de Bordeaux</a>
        </p>
    </body>
</html>