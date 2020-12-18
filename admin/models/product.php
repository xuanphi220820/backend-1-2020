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

    function addProduct($name,$manu,$type,$price,$image,$desc,$feature) {
        $sql = self::$connection->prepare(
            "INSERT INTO `products` ( `name`, `manu_id`, `type_id`, `price`, `pro_images`, `description`, `feature`) VALUES ( ? , ? , ? , ?, ? , ?, ? )");
        $sql->bind_param("sssissi",$name,$manu,$type,$price,$image,$desc,$feature);
        return $sql->execute(); //return array
    }

    function getProductById($id) {
        $sql = self::$connection->prepare(
            "SELECT * 
            FROM products,manufactures,protypes
            WHERE products.manu_id = manufactures.manu_id
            AND products.type_id = protypes.type_id AND id = ?");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }

    function editProduct($name,$manu,$type,$price,$image,$desc,$feature,$id) {
        $sql = self::$connection->prepare(
            "UPDATE `products`
            SET `name`=?, `manu_id`=?, `type_id`=?, `price`=?, `pro_images`=?, `description`=?, `feature`=? WHERE `products`.`id` = ?");
        $sql->bind_param("sssissii",$name,$manu,$type,$price,$image,$desc,$feature,$id);
        return $sql->execute(); //return array
    }
}