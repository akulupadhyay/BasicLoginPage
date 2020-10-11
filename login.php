<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
</head>
<body>
		
	<div id="head1">
		Welcome Back !
		<br><br>
	</div>
	
	<div id="form">
		<form method="POST" action="login_validation.php">
			<input id="email" type="email" name="email" placeholder="email address" required><br><br>
			<input id="password" type="password" name="password" placeholder="Password" required><br><br>
			<input id="submit" type="submit" name="submit">	
		</form>
	</div>
	<div id="main">
		<div id="head2">
			<h3>Not a User ?</h3>
		</div>
		<div id="signup">
			<a href="register.php">
				<button type="button" class="button">
					<strong>Sign Up Here !</strong>
				</button>
			</a>
		</div>
	</div>
</body>
</html>