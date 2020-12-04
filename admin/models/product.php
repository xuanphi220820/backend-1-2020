<?php 
class ProductAdmin extends Db {
    function getAll() {
        $sql = self::$connection->prepare("SELECT * FROM products,manufactures,protypes WHERE products.manu_id = manufactures.manu_id AND products.type_id = protypes.type_id ORDER BY created_at DESC");
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }

    function deleteProductById($id) {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `products`.`id` = ?");
        $sql->bind_param('i',$id);
        return $sql->execute(); //return an Object
    }
}