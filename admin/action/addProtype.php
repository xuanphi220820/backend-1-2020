<?php
include "index.php";
$protype = new ProtypeAdmin;
//$mainURL = 'http://localhost:82/nhom2/admin/form.php';
if(isset($_POST['submit'])) {
    
    $name = isset($_POST['name']) ? $_POST['name'] : '';

    $protype->addProtype($name);
    header('Location:../protypes.php');
    //var_dump($name);
}

