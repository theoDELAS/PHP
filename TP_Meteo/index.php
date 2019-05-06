<?php
    include('./color_text_background.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <style>
            body, html, .container-fluid {
                color: <?= $text_color ?>;
                background: <?= $background_color ?>;
            }

        </style>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <?php include('./style.php'); ?>

        <title>Site Météo</title>
    </head>
    <body>
    <div class="container-fluid">
        <h1>Météo</h1>
        <?php 
            echo '<p class="date">Nous sommes le ' . $date . ' et il est ' . $heure . '</p>';
        ?>
        <div class="meteo_ville">
            <div class="row">
                <p id="paris" class="col-lg-6">
                    <a class="lien" href="./paris.php">Voir la météo à Paris</a>
                </p>
                <p id="bordeaux" class="col-lg-6">
                    <a class="lien" href="./bordeaux.php">Voir la météo à  Bordeaux</a>
                </p>
            </div>
        </div>
    </div>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>