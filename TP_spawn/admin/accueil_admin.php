<?php
try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=fortnite;charset=utf8', 'root', '');    
    } catch (Exception $e) 
    {
        die('Erreur : ' . $e->getMessage());
    }
    $query = $bdd->query('SELECT name, id FROM spawn');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Page administrateur</title>
    </head>
    <body>
        <h1>Page d'administration</h1>
        <a class="add" href="add.php">Ajouter un spawn</a>
        <?php 
            while ($donnees = $query->fetch()) {
                ?> <p><?= $donnees['name'] ?></p>
                <a class="delete" href="./script_delete.php?id=<?= $donnees['id']?>">Supprimer</a>
                <a class="edit" href="./edit.php?id=<?= $donnees['id']?>">Modifier</a>
                <?php
            }
        ?>
        <p><a href="../index.php">Retour au générateur de spawn</a></p>
    </body>
</html>