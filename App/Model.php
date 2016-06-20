<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 16.06.2016
 * Time: 23:50
 */

namespace App;


 abstract class Model
{
    const TABLE = '';

     public $id;

    public static function findAll() {

        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

     public function isNew()
     {
         return empty($this->id);
     }

  public function insert() {

      if (!$this->isNew()) {

          return;
      }

      $columns = [];
      $values = [];

      foreach ($this as $k => $v) {

          if ('id' == $k) {

              continue;
          }
          $columns[] =  $k;
          $values[':' .$k] = $v;
      }
      var_dump($columns);
      

      $sql = '
      INSERT INTO ' . static::TABLE . '
       (' . implode(', ', $columns) . ')
       VALUES
       (' . implode(', ' , array_keys($values)) . ')
       ';

      $db = Db::instance();
      $db->execute($sql, $values);


  }

}
