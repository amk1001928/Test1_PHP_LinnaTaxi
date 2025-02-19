<?php
session_start();
include 'db_connect_ride.php'; // Include database connection

// Store form data in session
$_SESSION['user_name'] = $_POST['name'];
$_SESSION['user_mobile'] = $_POST['mobile'];

// Store form data temporarily in session
$_SESSION['form_data'] = [
    'name' => $_POST['name'],
    'startlocation' => $_POST['startlocation'],
    'endlocation' => $_POST['endlocation'],
    'mobile' => $_POST['mobile']
];
    // Escape user inputs to prevent SQL injection
    $name = $_POST["name"];
    $startlocation = $_POST["startlocation"];
    $endlocation = $_POST["endlocation"];
    $mobile = $_POST["mobile"];
    
    // SQL query to insert data
    $sql = "INSERT INTO ride (name, startlocation, endlocation, mobile) 
            VALUES ('$name', '$startlocation', '$endlocation', '$mobile')";

if ($connect->query($sql) === TRUE) {
    // Clear form data from session after successful submission
    unset($_SESSION['form_data']);
    header("Location: ride.php?signup=success"); // Redirect on successful apply
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}
$connect->close();
?>
