<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 16.06.2016
 * Time: 23:50
 */

namespace App;


class Model
{
    const TABLE = '';


    public static function findAll() {

        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            self::class
        );
    }

}
