<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 16.06.2016
 * Time: 8:59
 */

namespace App\Models;

use App\Db;


class Lesson
{
    public $title;
    public $date;
    public $description;
    public $text;

    public static function findAll()
    {

        $db = new Db();
        return $db->query(
            'SELECT * FROM lessons',
            'App\Models\Lesson'
        );

    }
}
