<?php

namespace App\Models;

use App\Db;
use App\Model;

 class UserList extends Model
 implements HasEmail
 {

    const TABLE = 'userlist';

    public $user;
    public $email;
     public $pass;

     /**
      * @deprecated 
      * @return mixed
      */

    public function getEmail()
    {
        return $this->email;
    }
}
