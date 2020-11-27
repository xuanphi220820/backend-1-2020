<?php
session_start();
// class Login extends Db {
//     function login() {
        
//     }
// }
if($_SERVER ['REQUEST_METHOD'] == 'POST') {
    require './db.php';
    require '../config.php';
    $username = addslashes($_POST['user']);
    $password = addslashes($_POST['pass']);

    if (!$username || !$password) {
        echo "Vui lòng nhập đủ tên đăng nhập và mật khẩu";
        exit;
    }

    $hashPass = password_hash($password,PASSWORD_DEFAULT);

    //check username
    $query = $connection->prepare("SELECT username, `password` FROM users WHERE username = $username");
    if (mysql_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //return to object;
    $query->execute();
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

    if ($password != $items['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    // echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
    header("location: index.php");
    die();
}    