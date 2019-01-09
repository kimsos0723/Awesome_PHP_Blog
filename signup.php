<?php
include './model/User.php';
include './database/Connection.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$nickname = $_POST['nickname'];

if(!($username and $password and $nickname)) {
    echo  "<script>alert('모든 문항을 입력해주세요'); history.back()</script>";
}

$connect = getConnection("blog");

if ($connect->connect_errno) {
    header("Location: /index.php");
    die();
}

$result = $connect->query("INSERT INTO user VALUES('{$username}', '{$password}', '{$nickname}')");
$connect->close();
if(!$result){
    echo  "<script>alert('이미 사용중인 ID 입니다.');history.back()</script>";
}else{
    echo "<script> alert('회원가입에 성공했습니다');history.back()</script>";
    $_SESSION['user'] = new User($username, $password, $nickname);
    header("Location: /index.php");
}
