<?php
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);


    // if(isset($name) && isset($surname)){
    //     echo "Bonjour ".$surname." ".$name;
    // }

    if(isset($name) && isset($surname)){
        header('Location: index.php?name='.$name.'&surname='.$surname);
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP : formulaires / traitement</title>
</head>
<body>
    <a href="index.php">Retour</a>  
</body>
</html>