<?php

require __DIR__ . '/autoload.php';



$controllerNews = new \App\Controllers\News();
 $controllerArticle = new \App\Controllers\Article();

$action = $_GET['action'] ?: 'Index';


$controllerNews->action($action);
 $controllerArticle->action($action);






