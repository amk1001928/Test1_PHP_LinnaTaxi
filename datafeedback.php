<?php
include 'db_connect_feedback.php'; // Include database connection

    // Escape user inputs to prevent SQL injection
    $driver = $_POST["driver_Performance"];
    $vehicle = $_POST["vehicle_condition"];
    $timeline = $_POST["timeliness"];
    $process = $_POST["booking_process"];
    $overall= $_POST["overall_satisfaction"];

    // SQL query to insert data
    $sql = "INSERT INTO feedback (driver-Performance, vehicle-condition, timeliness, booking-process,overall-satisfaction) 
            VALUES ('$driver', '$vehicle', '$timeline', '$process', '$overall')";

    if ($connect->query($sql) === TRUE) {
        header("Location: aboutus.php?signup=success"); 
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
$connect->close();
?>
