<div class="col-md-4 my-2 d-flex">
    <div class="card">
        <img src="/uploads/articles/<?=htmlentities($article["image"]) ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?=htmlentities($article["title"]) ?></h5>
            <p class="card-text"><?=htmlentities($article["content"]) ?></p>
            <a href="actualite.php?id=<?=htmlentities($key)?>" class="btn btn-primary">Lire la suite</a>
        </div>
    </div>
</div>