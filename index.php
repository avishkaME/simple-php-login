<?php
  $conn = new mysqli("localhost:8080", "root", "", "simple_login");
  if ($conn -> connect_eror) {
    die("connection failed".$conn->connect_eror);
  }


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>simple php login</title>
  </head>
  <body>
    <h1>Login form</h1>
    <form class="" action="" method="post">
      <input type="text" name="" value="" placeholder="username"><br>
      <input type="password" name="" value="" placeholder="password"><br>
      <input type="submit" name="btn" value="Login">
    </form>
  </body>
</html>
