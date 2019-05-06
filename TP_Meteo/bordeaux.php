<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Météo Paris</title>
    </head>
    <body>
        <?php
            for ($i=0; $i < 4; $i++) { 
                echo '<a href="https://www.prevision-meteo.ch/meteo/localite/bordeaux"><img src="https://www.prevision-meteo.ch/uploads/widget/bordeaux_' . $i .'.png" width="650" height="250" /></a>';
            }
        ?>
    </body>
</html>