<?php
//include './model/User.php';
//session_start();
//
//$username = $_POST["username"];
//$password = $_POST["password"];
//$_SESSION['user'] = null;
//
//if(!$username or !$password){
//    header("Location: /index.php");
//    die();
//}
//
//$connect = new mysqli('127.0.0.1','root','so621313','blog');
//if($connect->connect_errno){
//    echo '[연결실패] : '.$connect->connect_error.'';
//}
//
//$result = $connect->query("select * from user where username = '{$username}' ");
//
//if(!$result){
//    echo  "<script language='JavaScript'> alert('존재하지 않는 사용자입니다'); history.back()</script>";
//} else {
//    $data = $result->fetch_array();
//    $user = new User($data['username'], $data['password'], $data['nickname']);
//
//    if($user->verify($password)){
//        $_SESSION['user'] = serialize($user);
//        header("Location: /index.php");
//        die();
//    }else{
//        echo  "<script language='JavaScript'> alert('존재하지 않는 사용자입니다'); history.back()</script>";
//    }
//}

include './model/User.php';
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if(!$username or !$password){
    echo  "<script> alert('ID와 Password를 입력해 주세요..'); history.back()</script>";
    die();
}

$connect = new mysqli("127.0.0.1", "root", "so621313", "blog");

if ($connect->connect_errno) {
    header("Location: /index.php");
    die();
}

$result = $connect->query("SELECT * FROM user WHERE username='{$username}'");

if (!$result) {
    echo  "<script>alert('존재하지 않는 사용자입니다'); history.back()</script>";
} else {
    $data = $result->fetch_array();
    $data = new User($data['username'], $data['password'], $data['nickname']);

    if ($data->verify($password)) {
        $_SESSION['user'] = $data;
        header("Location: /index.php");
        die();
    } else {
        echo  "<script>alert('패스워드가 일치하지 않습니다.'); history.back()</script>";
    }
}

