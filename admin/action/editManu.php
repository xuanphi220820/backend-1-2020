<?php
include "index.php";
$manu = new ManufactureAdmin;
if(isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $upload_img = $_FILES['fileUpload']['name'] != null ? $_FILES['fileUpload']['name'] : $_POST['oldfile'];

    if($_FILES['fileUpload']['name']!=null) {
        $file = $_FILES['fileUpload']['tmp_name'];
        $path = "../../public/images/manu/".$_FILES['fileUpload']['name'];
        move_uploaded_file($file,$path);
    }

    $manu->editManu($name,$upload_img,$id);
    header('Location:../manufactures.php');
    //var_dump($name,$upload_img,$id);
}

