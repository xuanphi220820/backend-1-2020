<?php 
class ManufactureAdmin extends Db {
    function getAllManu() {
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }
}