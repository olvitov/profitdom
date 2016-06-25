<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 25.06.2016
 * Time: 19:14
 */

namespace App\Models;

use App\Model;


class Author
    extends Model
{
    const TABLE = 'authors';

    public $name;
}
