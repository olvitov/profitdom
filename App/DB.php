<?php

namespace App;

class DB
{
    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.0.1 dbname=jurnal', 'olvit', '34vit');
    }

}
