<?php
include "index.php";
$manu = new ManufactureAdmin;
//$mainURL = 'http://localhost:82/nhom2/admin/form.php';
if(isset($_POST['submit'])) {
    
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $upload_img = isset($_FILES['fileUpload']) ? $_FILES['fileUpload']['name'] : 'not_found.jpg';

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

    $manu->addManu($name,$upload_img);
    header('Location:../manufactures.php');
    //var_dump($name,$upload_img);
}

