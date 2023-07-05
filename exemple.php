<?php
$utilisateurs = [
    ["nom" => "Dupond", "prenom" => "Jean", "age" => 26],
    ["nom" => "Martin", "prenom" => "Rose", "age" => 35],
    ["nom" => "Doe", "prenom" => "Jane", "age" => 31]
];

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
    <h1>Hello</h1>
    <?php
    foreach ($utilisateurs as $key => $utilisateur) { ?>
        <article>
            <h2><?= $utilisateur["nom"]; ?> <?= $utilisateur["prenom"]; ?></h2>
            <p>Age : <?= $utilisateur["age"]; ?> ans</p>
        </article>

    <?php }
    ?>
</body>

</html>