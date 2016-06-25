<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\News::findAll();
$article = \App\Models\Article::findAll();

var_dump($news);


