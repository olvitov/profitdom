<?php

namespace App;

    class DB

{
        use Singleton;
    protected $dbh;
    
    protected function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1; dbname=jurnal', 'olvit', '34vit');
    }
    

    /*
     * если нужно что-то вставить v BD
     * */

    public function execute($sql, $params = []) {
        
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
        
    }
    /*
     * если нужно извлечь из БД
     * */
    
    public function query($sql, $params, $class) {
        
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        
        if (false !== $res) {
            
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
            
        }
    return[];   
        
    }


}
