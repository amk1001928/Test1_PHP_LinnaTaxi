<?php
include 'db_connect_ride.php'; // Include database connection

    // Escape user inputs to prevent SQL injection
    $name = $_POST["name"];
    $startlocation = $_POST["startlocation"];
    $endlocation = $_POST["endlocation"];
    $mobile = $_POST["mobile"];
    
    // SQL query to insert data
    $sql = "INSERT INTO ride (name, startlocation, endlocation, mobile) 
            VALUES ('$name', '$startlocation', '$endlocation', '$mobile')";

    if ($connect->query($sql) === TRUE) {
        header("Location: ride.php?signup=success"); // Redirect on successful apply
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
$connect->close();
?>
