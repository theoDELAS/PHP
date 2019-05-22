<?php
    $id = $_GET['id'];

    if(isset($id) && !empty($id))
    {
        $bdd = new PDO('mysql:host=localhost;dbname=fortnite;charset=utf8', 'root', '');

        $requete = $bdd->prepare('DELETE FROM spawn WHERE id=?');
        $requete->execute([$id]);
        header('Location: accueil_admin.php');
    }
    else 
    {
        echo 'Error';
    }
?>