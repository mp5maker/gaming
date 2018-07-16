<?php
require_once $_SERVER['DOCUMENT_ROOT']."/gaming/config/config.php";

abstract class Handler{
    protected static $handler;

    protected static function setHandler(){
        try{
            $d = parse_ini_file(CONFIG_PATH."/database.ini");
            self::$handler = new PDO("mysql:host={$d['host']};dbname={$d['dbname']}", $d['username'], $d['password']); 
            self::$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Connection Error:: ".$e->getMessage();
        }
    }

    abstract protected static function execute($mysql, $params);

    protected static function close(){
        self::$handler = null;
    }
}






