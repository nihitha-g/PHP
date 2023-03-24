<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit;
}

// If the user clicked the "logout" link, clear the session and redirect to the login form
if (isset($_GET['logout'])) {
  session_destroy();
  header('Location: registerform.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 mt-5">
      <div class="card">
        <div class="card-header">
          <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        </div>
        <div class="card-body">
          <p>You are logged in!</p>
          <a href="?logout=1" class="btn btn-danger">Logout</a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
