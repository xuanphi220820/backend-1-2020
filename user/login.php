<?php
session_start();
include "index.php";
$user = new User;

if(isset($_POST['user']) && isset($_POST['pass'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $login = $user->login($username);
    $userLogin = $login[0]['username'];
    $passLogin = $login[0]['password'];
    $hashPass = password_hash($passLogin, PASSWORD_DEFAULT);
    if ($username == $userLogin && password_verify($password,$hashPass)) {
        echo "Xin chào $userLogin";
    } else {
        echo "Thông tin đăng nhập không chính xác";
    }
}