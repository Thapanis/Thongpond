<?php
    include '../connectdb.php';

    $id = $_REQUEST['id'];
    $user = $_REQUEST['user'];
    $totalprice = $_REQUEST['totalprice'];
    $product = $_REQUEST['product'];
    // $quantity = $_REQUEST['quantity'];

    $sqlSelect = "SELECT o.order_id, o.quantity, o.totalprice FROM `order` o WHERE o.member_id = ".$user." AND o.product_id = ".$id." AND o.pay_id = 0 ";
    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $sql = "UPDATE `order` SET quantity = quantity+1 , totalprice = totalprice+".$totalprice." WHERE order_id = ".$row['order_id'];
        
            if ($conn->query($sql) === TRUE) {
                header("Location: ../order.php");
            } else {
                echo("Error description: " . $conn -> error);
            }
        }
    } else {
        $sql = "INSERT INTO `order` (quantity, totalprice, member_id, product_id)
            VALUES (1, $totalprice, $user, $product )";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../order.php");
        } else {
            echo("Error description: " . $conn -> error);
        }
    }

    $conn->close();

?>