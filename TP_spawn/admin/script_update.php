<?php
    if(isset($_POST['spawn_name']) && isset($_POST['source_img']))
    {
        $spawn_name = $_POST['spawn_name'];
        $source_img = $_POST['source_img'];
        $id = intval($_POST['id']);

        if(!empty($spawn_name) && !empty($source_img))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=fortnite;charset=utf8', 'root', '');
            $query = $bdd->prepare('UPDATE spawn SET name = ?, picture = ? WHERE id = ?');
            $query->execute([$spawn_name, $source_img, $id]);
            header('Location: ./accueil_admin.php');
        }
        else 
        {
            echo 'ça ne marche pas';
        }

    }
    else 
    {
        echo 'bdd pas trouvé';
    }
?>