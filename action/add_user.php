<?php
    include '../connectdb.php';

    $firstname = $_REQUEST['admin_firstname'];
	$lastname = $_REQUEST['admin_lastname'];
    $addr = $_REQUEST['admin_addr'];
    $tel = $_REQUEST['admin_tel'];
    $username = $_REQUEST['admin_user'];
    $pass = $_REQUEST['admin_pass'];
    $role = $_REQUEST['admin_role'];

    $sql = "INSERT INTO member (member_name, member_password, member_fname, member_lname, address, phone, member_role)
			VALUES ('$username', '$pass', '$firstname', '$lastname', '$addr', '$tel', '$role')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../list_user.php");
    }

    $conn->close();

    if($result){
        echo "<script>";
        echo "alert('เพิ่มสินค้าเรียบร้อยแล้ว');";
        echo "window.location ='list_product.php'; ";
        echo "</script>";
    } else {
        
        echo "<script>";
        echo "alert('ERROR!');";
        echo "window.location ='list_product.php'; ";
        echo "</script>";
    }
?>