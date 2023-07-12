<?php
$articles = [
    ["title" => "PHP vs Python", "content" => "Lorem php...", "image" => "1-php-vs-python.jpg"],
    ["title" => "React vs React Native", "content" => "Lorem react...", "image" => "2-react-vs-react-native.jpg"],
    ["title" => "DevOps", "content" => "Lorem devops...", "image" => "3-devops.png"],
];


function getArticleById(PDO $pdo, int $id):array|bool
{
    $query = $pdo->prepare("SELECT * FROM articles WHERE id = :id");
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $article = $query->fetch(PDO::FETCH_ASSOC);

    return $article;
}


function getArticleImage(string|null $image):string
{
    if ($image === null) {
        return _ASSETS_IMAGES_FOLDER_."default-article.jpg";
    } else {
        return _ARTICLES_IMAGES_FOLDER.$image;
    }
}