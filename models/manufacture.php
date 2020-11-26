<?php 
class Manufacture extends Db {
    function getAllManufactures() {
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }
    function getProductByManuId($id) {
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures 
        WHERE products.manu_id = manufactures.manu_id and manufactures.manu_id = ?");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }
}