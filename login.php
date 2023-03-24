<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if (isset($_SESSION['users'][$username]) && password_verify($password, $_SESSION['users'][$username])) {
    $_SESSION['username'] = $username;
    setcookie('username', $username, time()+3600);
    header('Location: dashboard.php');
  } else {
    echo 'Invalid username or password';
  }
}
?>
