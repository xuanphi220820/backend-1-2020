<?php 
class ManufactureAdmin extends Db {
    function getAllManu() {
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }

    function addManu($name,$image) {
        $sql = self::$connection->prepare(
            "INSERT INTO `manufactures` ( `manu_name`, `manu_img`) VALUES ( ? , ? )");
        $sql->bind_param("ss",$name,$image);
        return $sql->execute(); //return array
    }

    function getManuById($id) {
        $sql = self::$connection->prepare("SELECT * FROM manufactures WHERE manu_id = ?");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }

    function editManu($name,$image,$id) {
        $sql = self::$connection->prepare(
            "UPDATE `manufactures`
            SET `manu_name`=?, `manu_img`=? WHERE `manufactures`.`manu_id` = ?");
        $sql->bind_param("ssi",$name,$image,$id);
        return $sql->execute(); //return array
    }
}