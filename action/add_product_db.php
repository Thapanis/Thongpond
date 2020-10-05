<?php
    include '../connectdb.php';

    $productname = $_REQUEST['product_name'];
	$productdetail = $_REQUEST['product_detail'];
    $price = $_REQUEST['price'];
    $producttype = $_REQUEST['producttype_id'];
    $quantity = $_REQUEST['quantity'];

    echo $producttype;

    $sql = "INSERT INTO product (product_name, product_detail, price, producttype_id, quantity)
			VALUES ('$productname', '$productdetail', '$price', '$producttype', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../list_product.php");
    } else {
        echo $conn->error;
    }

    $conn->close();
?>