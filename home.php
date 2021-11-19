<?php

require("model/Manager.php");

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Mon blog</title>
    </head>
    <body>
    <div>
        <h1>Mon blog</h1>
        <p>En construction</p>
        <?php
        //On crée un nouvel objet $db qui est une instance de la classe Manager
        $connect = new Manager();
        //On fait appel à notre méthode
        echo $connect->dbConnect();
        ?>
    </div>
    </body>
</html>