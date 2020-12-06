<?php
	include '../connectdb.php';

	$member_id = $_REQUEST['id'];

	$sql ="DELETE FROM member WHERE member_id = '$member_id' ";
		
	if ($conn->query($sql) === TRUE) {
		// echo "Record deleted successfully";
		header("Location: ../list_user.php");
	} else {
		echo "Error deleting record: " . $conn->error;
	}

	$conn->close();
?>