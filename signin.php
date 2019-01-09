<?php
include './model/User.php';
include './database/Connection.php';
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if(!$username or !$password){
    echo  "<script> alert('ID와 Password를 입력해 주세요..'); history.back()</script>";
    die();
}

$connect = getConnection("blog");

if ($connect->connect_errno) {
    header("Location: /index.php");
    die();
}

$result = $connect->query("SELECT * FROM user WHERE username='{$username}'");
$connect->close();
if (!$result) {
    echo  "<script>alert('존재하지 않는 사용자입니다'); history.back()</script>";
} else {
    $data = $result->fetch_array();
    $data = new User($data['username'], $data['password'], $data['nickname']);
    $result->close();

    if ($data->verify($password)) {
        $_SESSION['user'] = $data;
        header("Location: /index.php");
        die();
    } else {
        echo  "<script>alert('패스워드가 일치하지 않습니다.'); history.back()</script>";
    }
}

