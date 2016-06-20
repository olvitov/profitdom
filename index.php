<?php


use App\Models\HasEmail;
use App\Models\UserList;


use App\Models\Lesson;
use App\Models\Article;

  require __DIR__ . '/autoload.php';

$userlist = new UserList();
$userlist->user = 'Vasya';
$userlist->email = 'v@pupkin.ru';
$userlist->pass = '34vit';
$userlist->insert();





/*var_dump($articles);

var_dump($lessons);*/
