<?php
include '../db_connect.php';

if (!isset($_GET['id'])) {
    header("Location: view_feedback.php");
    exit();
}

$id = $_GET['id'];

// Handle Update
if (isset($_POST['submit'])) {
    $driver_performance = $_POST['driver_performance'];
    $vehicle_condition = $_POST['vehicle_condition'];
    $timeliness = $_POST['timeliness'];
    $booking_process = $_POST['booking_process'];
    $overall_satisfaction = $_POST['overall_satisfaction'];

    $update_query = "UPDATE feedback SET 
        driver_performance = '$driver_performance',
        vehicle_condition = '$vehicle_condition',
        timeliness = '$timeliness',
        booking_process = '$booking_process',
        overall_satisfaction = '$overall_satisfaction'
        WHERE Feedback_id = '$id'";

    if ($connect->query($update_query) === TRUE) {
        header("Location: view_feedback.php?msg=updated");
        exit();
    }
}

// Fetch current feedback data
$sql = "SELECT * FROM feedback WHERE Feedback_id = '$id'";
$result = $connect->query($sql);
$feedback = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Update Feedback</h2>
            <a href="index.php" class="btn btn-secondary">Back to Feedback List</a>
        </div>

        <form method="POST" action="">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Driver Performance</label>
                    <input type="text" class="form-control" name="driver_performance" 
                           value="<?php echo $feedback['driver_performance']; ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Vehicle Condition</label>
                    <input type="text" class="form-control" name="vehicle_condition" 
                           value="<?php echo $feedback['vehicle_condition']; ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Timeliness</label>
                    <input type="text" class="form-control" name="timeliness" 
                           value="<?php echo $feedback['timeliness']; ?>" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Booking Process</label>
                    <input type="text" class="form-control" name="booking_process" 
                           value="<?php echo $feedback['booking_process']; ?>" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Overall Satisfaction</label>
                    <input type="text" class="form-control" name="overall_satisfaction" 
                           value="<?php echo $feedback['overall_satisfaction']; ?>" required>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update Feedback</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>