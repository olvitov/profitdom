<?php

  require __DIR__ . '/autoload.php';

$db = new \App\Db();

$data = $db->query(
    'SELECT * FROM articles',
    'App\Models\Article'

);

$data1 = $db->query(
    'SELECT * FROM lessons',
    'App\Models\lesson'
);


var_dump($data);

var_dump($data1);
