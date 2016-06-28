<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 25.06.2016
 * Time: 19:42
 */

namespace App\Models;

use App\Model;

/**
 * Class News
 * @package App\Models
 *
 * @property \App\Models\Author $author
 */

class Article
    extends Model
{
    const TABLE = 'articles';

    public $title;
    public $text;
    public $author_id;

    /**
     * LAZY LOAD
     *
     * @param $k
     * @return null
     */

    public function __get($k)
    {
        switch ($k) {

            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return null;

        }
    }

    public function __isset($k)
    {
        switch ($k) {

            case 'author':
                return true;
                break;
            default:
                return null;
        }

    }
}

