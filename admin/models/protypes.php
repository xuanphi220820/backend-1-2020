<?php 
class ProtypeAdmin extends Db {
    function getAllProtype() {
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }
    
    function addProtype($name) {
        $sql = self::$connection->prepare(
            "INSERT INTO `protypes` ( `type_name`) VALUES ( ? )");
        $sql->bind_param("s",$name);
        return $sql->execute(); //return array
    }

    function getTypeById($id) {
        $sql = self::$connection->prepare("SELECT * FROM protypes WHERE type_id = ?");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }

    function editProtype($name,$id) {
        $sql = self::$connection->prepare(
            "UPDATE `protypes`
            SET `type_name`=? WHERE `protypes`.`type_id` = ?");
        $sql->bind_param("si",$name,$id);
        return $sql->execute(); //return array
    }
}