<?php

namespace App;

class View
    implements \Countable
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

        foreach ($this->data as $prop => $value) {

            $$prop = $value;

        }
        include $template;
        $content = ob_get_contents();

        ob_end_clean();
        return $content;
    }

    public function display($templates) {
        
        echo $this->render($templates);

    }


    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        return $this->count($this->data);
    }
}
