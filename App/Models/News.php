<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 25.06.2016
 * Time: 19:42
 */

namespace App\Models;

use App\Model;


class News
    extends Model
{
    const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;

}
