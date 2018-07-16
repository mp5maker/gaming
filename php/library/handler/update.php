<?php
require_once $_SERVER['DOCUMENT_ROOT']."/gaming/config/config.php";
require_once LIBRARY_PATH."/handler/handler.php";

class Update extends Handler{
    public static function execute($sql, $params = null){
        parent::setHandler();
        try{
            self::$handler->beginTransaction();
            $stmt = self::$handler->prepare($sql);
            $result = $stmt->execute($params);
            self::$handler->commit();
            return $result;
        }catch(PDOException $e){
            self::$handler->rollback();
            parent::close();
            echo "Read Error:: ".$e->getMessage();
        }
    }
}