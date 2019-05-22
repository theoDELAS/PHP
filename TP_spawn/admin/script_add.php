<?php
    if(isset($_POST['spawn_name']) && isset($_POST['source_img']))
    {
        $spawn_name = $_POST['spawn_name'];
        $source_img = $_POST['source_img'];

        if(!empty($spawn_name) && !empty($source_img))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=fortnite;charset=utf8', 'root', '');
            $query = $bdd->prepare('INSERT INTO spawn (name, picture) VALUES ("' . $spawn_name . '", "' . $source_img . '")');
            $query->execute([$spawn_name, $source_img]);
            header('Location: ./accueil_admin.php');
        }
        else 
        {
            echo 'champs invalides';
            echo '<a href="add.php">Retour</a>';
        }

    }
    else 
    {
        echo 'bdd pas trouvé';
        echo '<a href="add.php">Retour</a>';

    }
?>