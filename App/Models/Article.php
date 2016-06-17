<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 16.06.2016
 * Time: 8:59
 */

namespace App\Models;

use App\Db;
use App\Model;


class Article extends  Model
{
    const TABLE = 'articles';

    public $title;
    public $date;
    public $description;
    public $text;


    public function getName()
    {

    }

}
