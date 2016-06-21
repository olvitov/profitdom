<?php

namespace App;

class View
{
    /**
     * Магический метод __set присваевание
     * @param $k
     * @param $v
     */

    protected $data =[];
    public function __set($k, $v)
    {
        $this->data[$k] = $v;

    }

    /**
     * Магический метод __get вызываеться при записи
     * @param $k
     * @return mixed
     */

    public function __get($k)
    {
        return $this->data[$k];
    }

    public function __isset($name)
    {
        if (isset($data))
            return true;
        else {
            return false;
        }
    }

    public function render($template) {

        ob_start();
        include $template;
        $content = ob_get_contents();

        ob_end_clean();
        return $content;
    }

    public function display($templates) {
        
        echo $this->render($templates);

    }


}
