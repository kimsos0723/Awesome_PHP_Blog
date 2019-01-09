<!doctype html>
<html lang="ko">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
  </head>
  <body>
    <div class="page-wrapper">
      <div class="login-wrapper">
        <p class="login-title">LOGIN</p>
        <form class="login-form" action="/signin.php" method="post">
          <input title="username" name="username" placeholder="Username">
          <input title="password" name="password" placeholder="Password" type="password">
          <button type="submit">로그인</button>
        </form>
      </div>
    </div>
  </body>
</html>