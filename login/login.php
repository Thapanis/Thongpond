<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login-action.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group" style="display: flex;">
			<button type="submit" class="btn btn-primary" name="login_user">Login</button>&nbsp;
			<button type="submit" class="btn btn-primary" href="register.php">Sign up</button>
		</div>
	</form>

</body>
</html>