<?php
include "index.php";
$product = new ProductAdmin;
if(isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $manu = $_POST['manu_id']; 
    $type = $_POST['type_id']; 
    $upload_img = $_FILES['fileUpload']['name'] != null ? $_FILES['fileUpload']['name'] : $_POST['oldfile'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $feature = $_POST['feature'];

    if($_FILES['fileUpload']['name']!=null) {
        $file = $_FILES['fileUpload']['tmp_name'];
        $path = "../../public/images/".$_FILES['fileUpload']['name'];
        move_uploaded_file($file,$path);
    }

    $product->editProduct($name,$manu,$type,$price,$upload_img,$desc,$feature,$id);
    header('Location:../index.php');
    //var_dump($id,$name,$manu,$type,$upload_img,$desc,$price,$feature);
}

