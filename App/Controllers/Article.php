<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 27.06.2016
 * Time: 13:46
 */

namespace App\Controllers;


use App\View;

class Article
{
    protected $view;
    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

    protected function beforeAction()
    {
        echo 'Счетчик';
    }

    protected function actionIndex()
    {
        $view = new \App\View();
        $this->view->title = 'Мой сайт';
        $this->view->article = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../templates/index1.php');

    }

    protected function actionOne()
    {
        $id =(int)$_GET['id'];
        $this->view->article = \App\Models\Article::findById($id);
        $this->view->display(__DIR__ . '/../templates/one1.php');
    }

}
