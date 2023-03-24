<?php
require_once('db.php');
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = $collection->findOne(['username' => $username]);
    if ($user && password_verify($password, $user['password'])) {
      session_start();
      $_SESSION['username'] = $username;
      setcookie('username', $username, time()+3600);
      header('Location: dashboard.php');
    } else {
      echo 'Invalid username or password';
    }
  }
?>
