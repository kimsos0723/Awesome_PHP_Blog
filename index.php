<?php
include './model/User.php';
session_start();
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css">
    <title>Plog</title>
  </head>
  <body>
    <div class="page-wrapper">
      <header class="page-header">
        <div>
          <div class="title-wrapper">
            <i class="profile fas fa-user-circle"></i>
              <?php
              $user = $_SESSION['user'];

              if ($user) {
                  echo "<p class='title'>{$user->getUsername()}</p>";
              } else {
                  echo "<p class='title'>Awesome Blog</p>";
              }
              ?>
            <p>처음만든 블로그</p>
          </div>
          <div class="item-wrapper">
              <?php
              if ($user) {
                  echo "<a href='/logout.php' class='item'>로그아웃</a>";
              } else {
                  echo "<a href='/login.php' class='item'>로그인</a>";
                  echo "<a href='/register.php' class='item' style='margin-left: 20px'>회원가입</a>";
              }
              ?>
          </div>
        </div>
      </header>
    </div>
  </body>
</html>