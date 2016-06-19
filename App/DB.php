<?php

namespace App;

    class DB
    extends Singleton
{
    protected $dbh;
    
    protected function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1; dbname=jurnal', 'olvit', '34vit');
    }
    

    /*
     * если нужно что-то вставить v BD
     * */

    public function execute($sql) {
        
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
        
    }
    /*
     * если нужно извлечь из БД
     * */
    
    public function query($sql, $class) {
        
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        
        if (false !== $res) {
            
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
            
        }
    return[];   
        
    }


}
