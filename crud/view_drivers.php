<?php
include '../db_connect.php';

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_query = "DELETE FROM drivers WHERE driver_id = '$id'";
    if ($connect->query($delete_query) === TRUE) {
        header("Location: view_drivers.php?msg=deleted");
        exit();
    }
}

// Fetch all drivers
$sql = "SELECT * FROM drivers";
$result = $connect->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Drivers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Drivers List</h2>
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
                    <th>DRIVER ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Vehicle Info</th>
                    <th>District</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['driver_id']; ?></td>
                    <td><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td>
                        <?php echo $row['vehicle_type'] . ' - ' . $row['vehicle_make'] . ' ' . $row['vehicle_model']; ?>
                    </td>
                    <td><?php echo $row['working_district']; ?></td>
                    <td>
                    <a href="update_driver.php?id=<?php echo $row['driver_id']; ?>" class="btn btn-primary btn-sm">Update</a>
                        <a href="view_drivers.php?delete=<?php echo $row['driver_id']; ?>" 
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>