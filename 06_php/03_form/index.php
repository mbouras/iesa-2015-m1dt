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
    </body>
</html>