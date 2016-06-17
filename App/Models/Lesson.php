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


class Lesson extends Model
{
    const TABLE = 'lessons';

    public $title;
    public $date;
    public $description;
    public $text;


}
