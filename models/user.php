<?php 
class User extends Db {
    function getAllUser() {
        $sql = self::$connection->prepare(
            "SELECT * FROM `users`");
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }
    function login($username) {
        $sql = self::$connection->prepare(
            "SELECT * FROM `users` WHERE `username` = ?");
        $sql->bind_param("s",$username);
        $sql->execute(); //return an Object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return array
    }
}