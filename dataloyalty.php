<?php
include 'db_connect_home.php'; // Include database connection

    // Escape user inputs to prevent SQL injection
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phoneNo = $_POST["phoneNo"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash password

    // SQL query to insert data
    $sql = "INSERT INTO loyalty (firstName, lastName, phoneNo, email, password) 
            VALUES ('$firstName', '$lastName', '$phoneNo', '$email', '$password')";

    if ($connect->query($sql) === TRUE) {
        header("Location: index.php?signup=success"); // Redirect on successful signup
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
$connect->close();
?>
