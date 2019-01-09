<!doctype html>
<html lang="ko">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/register.css">
    <title>Register</title>
  </head>
  <body>
    <div class="page-wrapper">
      <div class="register-wrapper">
        <p class="register-title">REGISTER</p>
        <form action="/signup.php" method="post" class="register-form">
          <input title="username" name="username" placeholder="Username">
          <input title="password" name="password" placeholder="Password" type="password">
          <input title="nickname" name="nickname" placeholder="Nickname">
          <button type="submit">회원가입</button>
        </form>
      </div>
    </div>
  </body>
</html>