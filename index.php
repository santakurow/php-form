<?php 

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-sample</title>
  <style>
  html, body {
    font-family: "Verdana", sans-serif;
  }
  </style>
</head>
<body>
  <form action="action.php" method="post">
    <label for="name">名前: </label><input type="text" name="name" id="name"><br>
    <label for="age">年齢: </label><input type="number" name="age" id="age"><br>
    性別:
    <label for="male">男</label><input type="radio" name="gender" id="male" value="男">
    <label for="female">女</label><input type="radio" name="gender" id="female" value="女">
    <label for="other">その他</label><input type="radio" name="gender" id="other" value="その他">
    <br>
    <br>
    <input type="submit" value="送信">
  </form>

  <?php
  foreach($_SESSION as $key => $value):
    if (!empty($_SESSION[$key])): 
    ?>
    <div id="users">
      <ul>
        <li><?= $_SESSION[$key] ?></li>
      </ul>
    </div>
    <?php 
    endif;
  endforeach;
  ?>
</body>
</html>
