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
			<input type="text" name="membername" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<button type="submit" class="btn btn-primary btn-block" name="login_user">Login</button>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="input-group" style="display: flex;">
			<b style="font-size: 20px;">
				Not yet a member? &nbsp; <a href="register.php" class="btn">Sign up</a>
			</b>
		</div>

	</form>

</body>
</html>