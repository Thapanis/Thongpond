<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $schema = "worldgrow";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $schema);
    mysqli_query($conn, "SET NAMES 'utf8' ");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
?>