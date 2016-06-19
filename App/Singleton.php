<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 19.06.2016
 * Time: 13:10
 */

namespace App;


trait Singleton
{


    protected static $instance;


    protected function __construct()
    {


    }

    public static function instance() {

        if (null === static::$instance)
        static::$instance = new static;

        return static::$instance;
    }

}
