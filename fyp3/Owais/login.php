<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap1.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav class="navbar-expand-lg navbar-light bg-light sticky-top">
			<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapse_target">
			<ul class="navbar-nav">
			<a class="navbar-brand"><img src="img/logo.png"></a>
			<span class="navbar-text">OSM Blood Bank</span>
				<li class="nav-item">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact Us</a>
				</li>
			</ul>
		</div>
		</nav>
		<div class="LoginSection">
			<h1>Log In</h1>
					<div class="LoginTextSect">
							<form method="POST" action="Controllers/loginController.php">
								  <div class="login-username">
								    <label for="name">Username</label>
								    <input type="text" name="username" class="form-control">
								  </div>
								  <div class="login-password">
								    <label for="password">Password</label>
								    <input type="password" name="password" class="form-control">
								  </div>

								 
								  <button type="submit" name="submit" class="btn btn-default">Login</button>
							</form>
						</div>

		<div class="LoginImage">
			
			<img src="img/bloodbank.jpg" class="img-fluid">
			
	</div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>