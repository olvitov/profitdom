<?php

  require __DIR__ . '/autoload.php';

$articles = \App\Models\Article::findAll();


$lessons =  \App\Models\Lesson::findAll();



var_dump($articles);

var_dump($lessons);
