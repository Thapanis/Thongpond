<?php
	include '../connectdb.php';

	$product_id = $_REQUEST['id'];

	$sql ="DELETE FROM product WHERE product_id = '$product_id' ";
		
	if ($conn->query($sql) === TRUE) {
		// echo "Record deleted successfully";
		header("Location: ../list_product.php");
	} else {
		echo "Error deleting record: " . $conn->error;
	}

	$conn->close();
?>