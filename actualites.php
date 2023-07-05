<?php
require_once __DIR__ . "/lib/article.php";
require_once __DIR__ . "/templates/header.php"; ?>

<h1>Toutes nos actualités</h1>

<div class="row text-center">
    <?php foreach ($articles as $key => $article) {
        require __DIR__ . "/templates/article_part.php";
    } ?>
</div>


<?php require_once __DIR__ . "/templates/footer.php"; ?>