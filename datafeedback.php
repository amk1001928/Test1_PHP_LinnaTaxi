

<?php
include 'db_connect_feedback.php'; // Include database connection

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs to prevent SQL injection
    $driver = mysqli_real_escape_string($connect, $_POST["driver_Performance"]);
    $vehicle = mysqli_real_escape_string($connect, $_POST["vehicle_condition"]);
    $timeline = mysqli_real_escape_string($connect, $_POST["timeliness"]);
    $process = mysqli_real_escape_string($connect, $_POST["booking_process"]);
    $overall = mysqli_real_escape_string($connect, $_POST["overall_satisfaction"]);

    // SQL query to insert data - using backticks for column names
    $sql = "INSERT INTO feedback (`driver_performance`, `vehicle_condition`, `timeliness`, `booking_process`, `overall_satisfaction`) 
            VALUES ($driver,$vehicle,$timeline,$process,$overall)";
            
    // Use prepared statement
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("sssss", $driver, $vehicle, $timeline, $process, $overall);
    
    if ($stmt->execute()) {
        header("Location: feedback.php?status=success");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}

$connect->close();
?>
