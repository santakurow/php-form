<?php

session_start();
foreach($_POST as $key => $value) {
  if (!empty($_POST[$key])) {
    $_SESSION[$key] = htmlspecialchars($_POST[$key]);
  }
}

header('Location: http://localhost:8000/index.php');

?>