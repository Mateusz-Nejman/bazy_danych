<?php

require_once "bootstrap.php";

try
{
  $repo = $entityManager->getRepository('article');
  $articles = $repo->findAll();

  foreach($articles as $index=>$article)
  {
    echo "{$article->getTitle()}\nAutor: {$article->getAuthor()}\n{$article->getContent()}";
  }
}
catch(Exception $e)
{
  echo $e;
}

