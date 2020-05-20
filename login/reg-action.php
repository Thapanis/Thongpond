<?php
    include 'connectdb.php';
    
	$membername = $_REQUEST['membername'];
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$password = $_REQUEST['password_1'];
	$addr = $_REQUEST['address'];
	$phone = $_REQUEST['phone'];

	$sqlCheck = "SELECT * FROM member 
			WHERE member_name = '$membername'";

    $sql = "INSERT INTO member (member_name, member_fname, member_lname, member_password, address, phone, member_role) 
			VALUES ('$membername', '$fname', '$lname', '$password', '$addr', '$phone', 'U')";

	if($result = mysqli_query($conn, $sqlCheck)){
		
		// Check username is duplicate
		if(mysqli_num_rows($result) > 0){
			header("Location: register.php");
		} else {
			//Check insert completed ?
			if ($conn->query($sql) === TRUE) {
				header("Location: login.php");
			} else {
				header("Location: register.php");
			}
		}
	}

	$conn->close();
?>