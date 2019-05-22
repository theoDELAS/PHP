<?php
try 
{
    $bdd = new PDO('mysql:host=localhost;dbname=fortnite;charset=utf8', 'root', '');    
} catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['spawn'])) {
    $requete = $bdd->query('SELECT * FROM spawn ORDER BY RAND() LIMIT 1');
    $donnees = $requete->fetch();
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Spawn aléatoire</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Spawn aléatoire Fortnite</h1>
            </div>
            <div class="row">
                <p class="col-md-6 spawn_text">Cliquez sur le bouton ci-dessous pour générer un spawn aléatoire</p>
                <a class="col-md-6" href="./admin/index.php">Connexion</a>
            </div>
                <!-- GENERATEUR SPAWN -->
                <form action="index.php" method="POST">
                    <input type="hidden" name="spawn" required>
                    <input id="btn_spawn" type="submit" value="Générer un spawn">
                </form>
            
        

            <?php
                if(isset($donnees)) {
                    echo '<p id="name_spawn">' . $donnees['name'] . '</p>';
                    echo '<img src="' . $donnees['picture'] . '" alt="sources images spawn">';
                }
            ?>
        </div>
    


        <script 
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous">
        </script>
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
        </script>
    </body>

</html>