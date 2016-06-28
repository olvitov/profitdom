<?php

require __DIR__ . '/autoload.php';



$controllerNews = new \App\Controllers\News();
 $controllerArticle = new \App\Controllers\Article();

 $controllerNews->action('Index');
 $controllerArticle->action('Index');






