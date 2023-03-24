<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="/favicon.ico">
		<title>PHP LOGIN</title>
		<!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="starter-template.css" rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"> Login</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<?php if (isset($_COOKIE['login'])): ?>
					<li><a href="#" onclick="document.getElementById('logout').submit()">Logout</a></li>
					<form action="" method="POST" id="logout">
						<input type="hidden" name="logout">
					</form>
					<?php endif ?>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="starter-template">
			<h1> Login </h1>
		</div>
		<div class="row">
			<?php if (!isset($_COOKIE['login'])): ?>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="" method="POST" role="form">
								<legend>Login</legend>
								<div class="form-group">
									<label for="">Your Name</label>
									<input type="text" class="form-control" id="" placeholder="Name" name="name">
								</div>
								<div class="form-group">
									<label for="">Username</label>
									<input type="text" class="form-control" id="" placeholder="Username" name="username">
								</div>
								<div class="form-group">
									<label for="">Password</label>
									<input type="password" class="form-control" id="" placeholder="Password" name="password">
								</div>
								<button type="submit" class="btn btn-primary" name="login">Login</button>
							</form>
						</div>
					</div>
				</div>
			<?php else: 
				$data = (array) json_decode($_COOKIE['login']);
			?>
			<h3>Welcome, <?php echo $data['name']; ?></h3>
			
			<?php endif ?>
		</div>
	</div>

	<?php 
	if (isset($_POST['login'])) {
		$name = $_POST['name'];
		$username = md5($_POST['username']);
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$array = array(
			'name' => $name,
			'username' => $username,
			'password' => $password
		);
		setcookie('login', json_encode($array));
		header('Refresh:0');
	}

	if (isset($_POST['logout'])) {
		setcookie('login', 'false', 1);
		header('Refresh:0');
	}

	 ?>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>