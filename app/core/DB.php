<?php

require_once(LIBS . 'DB' . DS . 'MysqliDb.php');


class DB
{
    protected $db;

    public function connect()
    {
        $dataBase = new MysqliDb(HOST, USER, PASS, DBNAME);
        /**
         * if the connection is Established 
         *  Make el variable $db == El connection => $dataBase;
         * after that @return el varible dh 3l4an lma ya7sl call ll function Connect();
         * t @return el connection; 
         */


        if (!$dataBase->connect()) {
            $this->db = $dataBase;
            return $this->db;
        } else {
            echo 'error';
        }
    }
}