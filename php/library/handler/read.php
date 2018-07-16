<?php
require_once $_SERVER['DOCUMENT_ROOT']."/gaming/config/config.php";
require_once LIBRARY_PATH."/handler/handler.php";

class Read extends Handler{
    public static function execute($sql, $params = null){
        parent::setHandler();
        try{
            $stmt = self::$handler->prepare($sql);
            $stmt->execute($params);
            $stmt->setFetchMode(PDO::FETCH_NUM);
            return $stmt->fetchAll();
        }catch(PDOException $e){
            parent::close();
            echo "Read Error:: ".$e->getMessage();
        }
    }
}
