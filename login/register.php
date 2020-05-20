<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="reg-action.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="membername" id="membername">
		</div>
		<div class="input-group">
			<label>First name</label>
			<input type="text" name="fname" id="fname">
		</div>
		<div class="input-group">
			<label>Last name</label>
			<input type="text" name="lname" id="lname">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" id="password_1">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="address" name="address" id="address">
		</div>
		<div class="input-group">
			<label>Phone no.</label>
			<input type="phone" name="phone" id="phone">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="input-group" style="display: flex;">
			<b style="font-size: 20px;">
				Already a member? &nbsp; <a href="login.php" class="btn">Sign in</a>
			</b>
		</div>
	</form>
</body>
</html>