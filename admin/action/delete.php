<?php
include "index.php";

$product = new ProductAdmin;

$mainURL = 'http://localhost:82/nhom2/admin/';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $product->deleteProductById($id);
    header('Location:'.$mainURL);
}
