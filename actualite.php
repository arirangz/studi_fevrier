<?php
require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/pdo.php";
require_once __DIR__ . "/lib/article.php";
require_once __DIR__ . "/templates/header.php";


$error = false;

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $article = getArticleById($pdo, $id);

    if ($article) {
        $imagePath = getArticleImage($article["image"]);
    } else {
        $error = true;
    }
} else {
    $error = true;
}


?>

<?php if ($error) { ?>
    <h1>Article introuvable</h1>
<?php } else { ?>
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?= htmlentities($imagePath) ?>" class="d-block mx-lg-auto img-fluid" alt="<?= htmlentities($article["title"]) ?>" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= htmlentities($article["title"]) ?></h1>
            <p class="lead"><?= htmlentities($article["content"]) ?></p>
        </div>
    </div>
<?php } ?>

<?php require_once __DIR__ . "/templates/footer.php"; ?>