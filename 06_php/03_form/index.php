<?php
    $date = date("d-m-Y");
    echo $date;
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP PHP : formulaires</title>
    </head>
    <body>
        <form action="post.php" method="post">
            <input type="text" name="name" value="" placeholder="Nom"/>
            <input type="text" name="surname" value="" placeholder="Prenom"/>
            <input type="submit" value="Envoyer">
        </form>
        <p>
            <?php 
                if(isset($_GET['surname'])){
                    echo 'Bienvenue '.$_GET['surname'];
                } 
                if(isset($_GET['name'])){
                    echo ' '.$_GET['name'];
                }
            ?>
        </p>
    </body>
</html>