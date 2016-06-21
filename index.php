<?php

require __DIR__ . '/autoload.php';



$view = new \App\View;
$view->title = 'Мой сайт';
$view->userlist = \App\Models\UserList::findAll();
 echo $view->render(__DIR__ . '/App/templates/index.php');







