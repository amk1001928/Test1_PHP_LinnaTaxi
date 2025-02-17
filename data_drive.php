<?php
include 'db_drive_connect.php'; // Include database connection

    // Escape user inputs to prevent SQL injection
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $vehicleType = $_POST['vehicleType'];
    $vehicleMake = $_POST['vehicleMake'];
    $vehicleModel = $_POST['vehicleModel'];
    $availability = $_POST['availability'];
    $workingDistrict = $_POST['workingDistrict'];

    // SQL query to insert data
    $sql = "INSERT INTO drivers (first_name, last_name, email, mobile, vehicle_type, vehicle_make, vehicle_model, availability, working_district)
            VALUES ( $firstName, $lastName, $email, $mobile, $vehicleType, $vehicleModel, $availability ,  $workingDistrict)";

    if ($connect->query($sql) === TRUE) {
        header("Location: drive.php?register=success"); // Redirect on successful registation 
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
$connect->close();
?>
