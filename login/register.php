<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>ลงทะเบียน</h2>
	</div>
	
	<form method="post" action="reg-action.php">

		<div class="input-group">
			<label>ผู้ใช้งาน</label>
			<input type="text" required class="form-control" name="membername" id="membername">
		</div>
		<div class="input-group">
			<label>ชื่อ</label>
			<input type="text" required class="form-control" name="fname" id="fname">
		</div>
		<div class="input-group">
			<label>นามสกุล</label>
			<input type="text" required class="form-control" name="lname" id="lname">
		</div>
		<div class="input-group">
			<label>รหัสผ่าน</label>
			<input type="password" required class="form-control" name="password_1" id="password_1">
		</div>
		<div class="input-group">
			<label>ที่อยู่</label>
			<input type="address" required class="form-control" name="address" id="address">
		</div>
		<div class="input-group">
			<label>หมายเลขโทรศัพท์</label>
			<input type="phone" required class="form-control" name="phone" id="phone" pattern="^[0-9]+$">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">ตกลง</button>
		</div>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="input-group" style="display: flex;">
			<b style="font-size: 20px;">
			เป็นสมาชิกอยู่แล้ว ? &nbsp; <a href="login.php" class="btn">ลงชื่อเข้าใช้งาน</a>
			</b>
		</div>
	</form>
</body>
</html>