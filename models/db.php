<?php
class Db 
{
    public static $connection;
    public function __construct()
    {
        // if(!isset($_SESSION["username"]) || $_SESSION["username"] == ''){
        //     //echo "Login error ";
        //     $_SESSION["username"] = '';
        //     header('Location:../login/index.php');
        //     exit;
        // } 
        // else {
        //     header("location:../admin/index.php");
        //     exit;
        // }

        if (!self::$connection) {
        self::$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, PORT);
        self::$connection->set_charset(DB_CHARSET);
        }
        return self::$connection;
    }
}