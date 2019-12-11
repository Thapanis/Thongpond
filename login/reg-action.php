<?php
    include 'connectdb.php';
    
    $username = $_REQUEST['username'];
	$password = $_REQUEST['password_1'];
	$addr = $_REQUEST['address'];
	$phone = $_REQUEST['phone'];

    $sql = "INSERT INTO user (user_name, user_password, user_address, phone) 
			VALUES ('$username', '$password', '$addr', '$phone')";
	
	//Check true or false
	if ($conn->query($sql) === TRUE) {
		header("Location: login.php");
	} else {
		echo "Error !!";
	}

    $conn->close();
?>