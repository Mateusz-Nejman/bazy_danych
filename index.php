<?php

require_once "bootstrap.php";

try {
  $repo = $entityManager->getRepository('article');
  $articles = $repo->findAll();

  foreach ($articles as $index => $article) {
    //echo "{$article->getTitle()}\nAutor: {$article->getAuthor()}\n{$article->getContent()}";
  }
} catch (Exception $e) {
  echo $e;
}

$is_article = isset($_GET["id"]);
$head_title = $is_article ? $articles[$_GET["id"]]->getTitle() : "Lista artykułów";
$article = $is_article ? $articles[$_GET["id"]] : null;

?>

<html>

<head>
  <title><?= $head_title; ?></title>
</head>

<body>
  <?php if ($is_article) : ?>
    <h2><?= $article->getTitle(); ?></h2>
    <h3>Autor: <?= $article->getAuthor(); ?></h3>
    <p><?= $article->getContent(); ?></p>
    <a href="index.php">Wróć</a>
  <?php else : ?>
    <h2>Lista artykułów</h2>
    <ul>
      <?php foreach ($articles as $index => $value) : ?>
        <li><a href="?id=<?= $index; ?>"><?= $value->getTitle(); ?></a></li>

      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</body>

</html>