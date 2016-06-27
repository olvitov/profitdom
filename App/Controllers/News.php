<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 27.06.2016
 * Time: 13:46
 */

namespace App\Controllers;


use App\View;

class News
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
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__ . '/../templates/index.php');

    }

}
