<?php 
class Protype extends Db {
    function getAllProtype() {
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }
    function getProductByProtype($id) {
        $sql = self::$connection->prepare("SELECT * FROM products, protypes WHERE products.type_id = protypes.type_id AND protypes.type_id = ?");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }
}