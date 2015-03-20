<?php
    $date = date("d-m-Y");
    echo $date;
    
    if(isset($_POST['name']) && isset($_POST['surname'])){
        $name = htmlspecialchars($_POST['name']);
        $surname = htmlspecialchars($_POST['surname']);
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP PHP : formulaires - version SALE</title>
    </head>
    <body>
        <form action="bad.php" method="post">
            <input type="text" name="name" value="" placeholder="Nom"/>
            <input type="text" name="surname" value="" placeholder="Prenom"/>
            <input type="submit" value="Envoyer">
        </form>
        <p><?php echo "Bonjour ".$surname." ".$name; ?></p>
    </body>
</html>

