<?php 
class Product extends Db {
    function getAllFeatureProducts() {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 LIMIT 3");
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }

    function getNewProducts() {
        $sql = self::$connection->prepare("SELECT * FROM products ORDER BY created_at DESC LIMIT 3");
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }

    function getProductById($id) {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }

    function getRelateProduct($id) {
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures 
        WHERE products.manu_id = manufactures.manu_id 
        AND products.manu_id = ?
        LIMIT 3");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }

    function getAllSearch($keyword) {
         $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ? ");
         $keyword = "%".$keyword."%";
         $sql->bind_param("s",$keyword);
         $sql->execute(); //return an Object
         $items = array();
         $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
         return $items; //return array
     }

    function searchProduct($keyword,$page,$perPage) {
       // $keyword = $_GET['key'];
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ? LIMIT $firstLink,$perPage");
        $keyword = "%".$keyword."%";
        $sql->bind_param("s",$keyword);
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }

    function formatPrice($priceFloat) {
        $symbol = ' VNĐ';
        $symbol_thousand = '.';
        $decimal_place = 0;
        $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
        return $price.$symbol;
    }
}