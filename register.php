<?php
require_once('db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $collection->insertOne(['username' => $username, 'password' => $password]);
    header('Location: loginform.php');
  }

?>


