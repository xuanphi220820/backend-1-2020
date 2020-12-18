<?php
include "index.php";
$product = new ProductAdmin;
//$mainURL = 'http://localhost:82/nhom2/admin/form.php';
if(isset($_POST['submit'])) {
    
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $manu = isset($_POST['manu_id']) ? $_POST['manu_id'] : false;
    $type = isset($_POST['type_id']) ? $_POST['type_id'] : false;
    $upload_img = isset($_FILES['fileUpload']) ? $_FILES['fileUpload']['name'] : 'not_found.jpg';
    $desc = isset($_POST['description']) ? $_POST['description'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $feature = isset($_POST['feature']) ? $_POST['feature'] : 0;

    //upload file
    $target_dir = "../../public/images/";
    $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $file = $_FILES['fileUpload']['tmp_name'];
    $path = "../../public/images/".$_FILES['fileUpload']['name'];

    //check exist file
    // if(file_exists($target_file)) {
    //     echo "File already exists";
    //     $uploadOk = 0;
    // }
    // //check file format   
    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    // && $imageFileType != "gif" ) {
    //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //     $uploadOk = 0;
    // }
    // //check file size
    // // Check file size
    // if ($_FILES["fileUpload"]["size"] > 500000) {
    //     echo "Sorry, your file is too large.";
    //     $uploadOk = 0;
    // }

    
    if(move_uploaded_file($file,$path)) {
        echo "upload success";
    } else {
        echo "Upload error";
    }

    $product->addProduct($name,$manu,$type,$price,$upload_img,$desc,$feature);
    header('Location:../index.php');
    //var_dump($name,$manu,$type,$upload_img,$desc,$price,$feature);
}

