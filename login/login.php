<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>เข้าสู่ระบบ</h2>
	</div>
	
	<form method="post" action="login-action.php">

		<div class="input-group">
			<label>ผู้ใช้งาน</label>
			<input type="text" required class="form-control" name="membername" >
		</div>
		<div class="input-group">
			<label>รหัสผ่าน</label>
			<input type="password" required class="form-control" name="password">
		</div>
		<div class="row">
			<button type="submit" class="btn btn-primary btn-block" name="login_user">เข้าสู่ระบบ</button>
		</div>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="input-group" style="display: flex;">
			<b style="font-size: 20px;">
				ยังไม่ได้เป็นสมาชิก &nbsp; <a href="register.php" class="btn">สมัครสมาชิกใหม่</a>
			</b>
		</div>

	</form>

</body>
</html>