<?php


use App\Models\HasEmail;
use App\Models\UserList;


use App\Models\Lesson;
use App\Models\Article;

  require __DIR__ . '/autoload.php';

 $articles = Article::findAll();


 $lessons =  Lesson::findAll();

 $userlist = UserList::findAll();

// echo \App\Models\Article::$table;


    function sendEMail(HasEmail $user, string $message)

    {
        echo 'Почта уходит на ' . $user->email;

    }

    sendEMail($userlist[0],'Hello');






/*var_dump($articles);

var_dump($lessons);*/
