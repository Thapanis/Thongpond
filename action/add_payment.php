<?php
    include '../connectdb.php';
    
    $id = $_REQUEST['memberId'];
    $total = $_REQUEST['total'];

    // echo $id;
    // echo $total;

    $totalPrice = 0;
    $memberId = 0;

    $sql = "SELECT o.totalprice, o.member_id, o.product_id, o.quantity FROM `order` o JOIN member m ON m.member_id = o.member_id WHERE m.member_name = '".$id."' AND pay_id = 0 ";	
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $totalPrice += $row['totalprice'];
            $memberId = $row['member_id'];

            $sqlTemp = "UPDATE `product`
                    SET quantity = quantity-".$row['quantity']."
                    WHERE product_id = ".$row['product_id'];

            if ($conn->query($sqlTemp) === FALSE) {
                echo("Error update description: " . $conn -> error);
            }
        }
    }

    $sqlInsert = "INSERT INTO `payment` (pay_date, totalprice, member_id)
                VALUES ( NOW(), $totalPrice, $memberId )";

    if ($conn->query($sqlInsert) === TRUE) {

        $last_id = $conn->insert_id;
        $sqlUpdate = "UPDATE `order`
                    SET pay_id = '".$last_id."'
                    WHERE pay_id = 0 ";

        if ($conn->query($sqlUpdate) === TRUE) {
            header("Location: ../display.php?payId=".$last_id);
        } else {
            echo("Error update description: " . $conn -> error);
        }

    } else {
        echo("Error insert description: " . $conn -> error);
    }

    $conn->close();

?>