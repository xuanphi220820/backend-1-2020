<?php
include "index.php";
$type = new ProtypeAdmin;
if(isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];

    $type->editProtype($name,$id);
    header('Location:../protypes.php');
    //var_dump($name,$id);
}

