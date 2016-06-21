<?php



require __DIR__ . '/autoload.php';

$userlist = \App\Models\UserList::findAll();

  include __DIR__ . '/App/templates/index.php';






/*var_dump($articles);

var_dump($lessons);*/
