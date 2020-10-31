<?php
    include '../connectdb.php';

    $id = $_REQUEST['id'];
    //$user = $_REQUEST['user'];
    //$totalprice = $_REQUEST['totalprice'];
    //$product = $_REQUEST['product'];
    $quantity = $_REQUEST['quantity'];
        $sql = "UPDATE `order` 
                SET quantity = '$quantity'
            WHERE order_id = '$id'";
              
    if ($conn->query($sql) === TRUE) {
        header("Location: ../order.php");
    } else {
        echo("Error description: " . $conn -> error);
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