<?php

/*
    Un pirate peut passer un script js à la place du prenom:
    ex: ?prenom=<script>document.location="https://www.google.fr/";</script>
*/

$prenom = $_GET["prenom"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
</head>
<body>
    <!-- Avec htmlentities, les caractères spéciaux vont être remplacé et le code ne sera pas exécuté -->
    <h1>Joyeux anniversaire <?=htmlentities($prenom);?></h1>
</body>
</html>