<?php
	include 'connectdb.php';
	session_start();
    
    $username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	$sql = "SELECT * FROM member 
			WHERE member_name = '$username'
			AND member_password = '$password'";
	
	if($result = mysqli_query($conn, $sql)){
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				$_SESSION["user_name"] = $row['member_name'];
				$_SESSION["user_role"] = $row['member_role'];
			}

			header("Location: ./../index.php");
		} else {
			header("Location: login.php");
		}
	}

    $conn->close();
?>