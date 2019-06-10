<?php
    include_once './pokemons/pokemon.php';
    include_once './pokemons/salameche.php';
    include_once './pokemons/bulbizarre.php';
    include_once './pokemons/carapuce.php';

    include_once './items/balls/ball.php';
    include_once './items/balls/pokeball.php';
    include_once './items/balls/superball.php';
    include_once './items/balls/hyperball.php';
    include_once './items/balls/masterball.php';

    include_once './items/potions/potions.php';
    include_once './items/potions/potion.php';
    include_once './items/potions/superpotion.php';
    include_once './items/potions/hyperpotion.php';
    include_once './items/potions/potionmax.php';


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
            echo 'Un salamèche sauvage apparaît<br>';
            $salameche = new Salameche(8);
            echo 'Carapuce est envoyé au combat<br>';
            $carapuce = new Carapuce(5);
            $carapuce->attack($salameche);
            $salameche->attack($carapuce);


        ?>
    </body>
</html>