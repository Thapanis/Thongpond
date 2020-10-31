<?php
include '../connectdb.php';


$order_id = $_POST['order_id'];



$sql ="DELETE FROM `order` WHERE order_id";
		
		if ($conn->query($sql) === TRUE) {
			echo "Record deleted successfully";
		  } else {
			echo "Error deleting record: " . $conn->error;
		  }
 

		$conn->close();
		if($result){
			echo "<script>";
			echo "window.location ='order.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='order.php'; ";
			echo "</script>";
		}

?>