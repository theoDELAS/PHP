<?php
    $id = $_GET['id'];

    $bdd = new PDO('mysql:host=localhost;dbname=fortnite;charset=utf8', 'root', '');
    $query = $bdd->prepare('SELECT name, picture FROM spawn WHERE id=?');
    $query->execute([$id]);
    $donnees = $query->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Modifier un spawn</title>
    </head>
    <body>
    <form action="script_update.php" method="post">
        <label for="spawn_name">Nom du spawn</label>
        <input type="text" name="spawn_name" value="<?= $donnees['name'] ?>">

        <label for="source_img">Source de l'image du spawn</label>
        <input type="text" name="source_img" value="<?= $donnees['picture'] ?>">

        <input type="hidden" value="<?= $_GET['id'] ?>" name="id">

        <input type="submit" value="Valider">
    </form>
        
    </body>
</html>