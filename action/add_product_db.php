<?php 

    // Database connection
    include 'connectdb.php';
    
    if(isset($_POST["submit"])) {
        // Set image placement folder
        $target_dir = "images/";
        $product_name = basename($_POST['product_name']);
        $product_detail = basename($_POST['product_detail']);
        $price = basename($_POST['price']);
        $producttype_id = basename($_POST['producttype_id']);
        $quantity = basename($_POST['quantity']);
        $uploadpic = basename($_FILES["fileUpload"]["name"]);
        // Get file path
        $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
        // Get file extension
        $imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Allowed file types
        $allowd_file_ext = array("jpg", "jpeg", "png");
       
        

               
            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
                
                $sql = "INSERT INTO product (product_name,product_detail,price,quantity,producttype_id,pic) 
                VALUES ('$product_name','$product_detail','$price','$quantity','$producttype_id','$uploadpic')";        

                $stmt = $conn->prepare($sql);
                 if($stmt->execute()){
                    $resMessage = array(
                        "status" => "alert-success",
                        "message" => "Image uploaded successfully."
                    );                 
                 }
            } else {
                $resMessage = array(
                    "status" => "alert-danger",
                    "message" => "Image coudn't be uploaded."
                );
            }
        

    }

?>