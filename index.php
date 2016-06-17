<?php

  require __DIR__ . '/autoload.php';

 $articles = \App\Models\Article::findAll();


 $lessons =  \App\Models\Lesson::findAll();

// echo \App\Models\Article::$table;



var_dump($articles);

var_dump($lessons);
