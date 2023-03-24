<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<form class="form-signin" method="post" action="register.php">
					<h1 class="h3 mb-3 font-weight-normal text-center">Register</h1>
					<div class="form-label-group">
						<input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
						<label for="username">Username</label>
					</div>
					<div class="form-label-group">
						<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
						<label for="password">Password</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
