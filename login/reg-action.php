<?php
    include 'connectdb.php';
    
    $username = $_REQUEST['username'];
	$password = $_REQUEST['password_1'];
	$addr = $_REQUEST['address'];
	$phone = $_REQUEST['phone'];

	$sqlCheck = "SELECT * FROM user 
			WHERE user_name = '$username'";

    $sql = "INSERT INTO user (user_name, user_password, user_address, phone) 
			VALUES ('$username', '$password', '$addr', '$phone')";
	
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