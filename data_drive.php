<?php
session_start(); 
include 'db_drive_connect.php'; // Include database connection

$cookieExpiration = time() + (86400);
setcookie('firstName', $_POST['firstName'], $cookieExpiration);
setcookie('lastName', $_POST['lastName'], $cookieExpiration);
setcookie('email', $_POST['email'], $cookieExpiration);
setcookie('mobile', $_POST['mobile'], $cookieExpiration);
setcookie('vehicleType', $_POST['vehicleType'], $cookieExpiration);
setcookie('vehicleMake', $_POST['vehicleMake'], $cookieExpiration);
setcookie('vehicleModel', $_POST['vehicleModel'], $cookieExpiration);
setcookie('availability', $_POST['availability'], $cookieExpiration);
setcookie('workingDistrict', $_POST['workingDistrict'], $cookieExpiration);


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
    VALUES ('$firstName', '$lastName', '$email', '$mobile', '$vehicleType', '$vehicleMake', '$vehicleModel', '$availability', '$workingDistrict')";

    if ($connect->query($sql) === TRUE) {
        $_SESSION['success_message'] = "Registration successful!";
        header("Location: drive.php?register=success"); // Redirect on successful registation 
        exit();
    } else {
        $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $connect->error;
        header("Location: drive.php?register=error");
        exit();}
$connect->close();
?>
