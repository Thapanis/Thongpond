<?php
	include 'connectdb.php';
	session_start();
    
    $username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	$sql = "SELECT * FROM user 
			WHERE user_name = '$username'
			AND user_password = '$password'";
	
	if($result = mysqli_query($conn, $sql)){
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				$_SESSION["username"] = $row['user_name'];
			}

			header("Location: ./../index.php");
		} else {
			header("Location: login.php");
		}
	}

    $conn->close();
?>