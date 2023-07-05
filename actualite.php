<?php
require_once __DIR__ . "/lib/article.php";
require_once __DIR__ . "/templates/header.php";

$id = $_GET["id"];

$article = $articles[$id];

?>


<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="/uploads/articles/<?=$article["image"] ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?=$article["title"] ?></h1>
        <p class="lead"><?=$article["content"] ?></p>
    </div>
</div>

<?php require_once __DIR__ . "/templates/footer.php"; ?>