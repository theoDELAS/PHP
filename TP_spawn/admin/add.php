<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Modifier un spawn</title>
    </head>
    <body>
    <form action="script_add.php" method="post">
        <label for="spawn_name">Nom du spawn</label>
        <input type="text" name="spawn_name" placeholder="Nom du spawn">

        <label for="source_img">Source de l'image du spawn</label>
        <input type="text" name="source_img" placeholder="Le chemin de la photo">

        <input type="submit" value="Valider">
    </form>
        
    </body>
</html>