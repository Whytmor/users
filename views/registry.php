<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <form action="../src/models/registry_handler.php" method="post">
    user<input type="text" name="user_name"><br>
    password<input type="text" name="password"><br>
    phone<input type="text" name="phone"><br>
    email<input type="text" name="email"><br>
    <input type="hidden" name="userId" value="0">
    <button type="submit" name="registry" value="registry">Зарегистрироваться</button>
</form>
   </body>
</html>