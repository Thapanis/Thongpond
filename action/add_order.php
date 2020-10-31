<?php
    include '../connectdb.php';

    $id = $_REQUEST['id'];
    $user = $_REQUEST['user'];
    $totalprice = $_REQUEST['totalprice'];
    $product = $_REQUEST['product'];
    $quantity = $_REQUEST['quantity'];
    // if(id !=null || id != ''){
    //     $sql = "UPDATE `order` 
    //             SET quantity = '$quantity'
    //         WHERE order_id = '$id'";
            
    // }
    // else{
        $sql = "INSERT INTO `order` (quantity, totalprice, member_id, product_id)
            VALUES (1, $totalprice, $id,$product )";
    //}
            
    if ($conn->query($sql) === TRUE) {
        header("Location: ../order.php");
    } else {
        echo("Error description: " . $conn -> error);
    }

    $conn->close();

?>