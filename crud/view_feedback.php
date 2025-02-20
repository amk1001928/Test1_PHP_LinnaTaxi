<?php
include '../db_connect.php';

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_query = "DELETE FROM feedback WHERE Feedback_ID = '$id'";
    if ($connect->query($delete_query) === TRUE) {
        header("Location: view_feedback.php?msg=deleted");
        exit();
    }
}

// Fetch all feedback
$sql = "SELECT * FROM feedback";
$result = $connect->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Feedback List</h2>
            <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
        </div>

        <?php if (isset($_GET['msg']) && $_GET['msg'] == 'updated'): ?>
            <div class="alert alert-success">Record updated successfully!</div>
        <?php endif; ?>

        <?php if (isset($_GET['msg']) && $_GET['msg'] == 'deleted'): ?>
            <div class="alert alert-success">Record deleted successfully!</div>
        <?php endif; ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Driver Performance</th>
                    <th>Vehicle Condition</th>
                    <th>Timeliness</th>
                    <th>Booking Process</th>
                    <th>Overall Satisfaction</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['Feedback_ID']; ?></td>
                    <td><?php echo $row['driver_performance']; ?></td>
                    <td><?php echo $row['vehicle_condition']; ?></td>
                    <td><?php echo $row['timeliness']; ?></td>
                    <td><?php echo $row['booking_process']; ?></td>
                    <td><?php echo $row['overall_satisfaction']; ?></td>
                    <td>
                        <a href="update_feedback.php?id=<?php echo $row['Feedback_ID']; ?>" class="btn btn-primary btn-sm">Update</a>
                        <a href="view_feedback.php?delete=<?php echo $row['Feedback_ID']; ?>" 
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this feedback?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>