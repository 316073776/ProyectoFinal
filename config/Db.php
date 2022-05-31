<?php 

require_once 'config.php';

class Db{

    public static function connect(){

        $con = pg_connect("dbname=" . DBNAME . "user=". DBUSER . "password=" . DBPASS . "port=" . DBPORT);

        return $con;
    }
}