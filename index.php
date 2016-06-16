<?php

  require __DIR__ . '/autoload.php';

$db = new \App\Db();

$data = $db->query('SELECT * FROM articles');

$data1 = $db->query('SELECT * FROM lessons');


var_dump($data);

var_dump($data1);
