<?php
include 'db_connect.php';

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_query = "DELETE FROM ride WHERE rideid = '$id'";
    if ($connect->query($delete_query) === TRUE) {
        header("Location: view_ride.php?msg=deleted");
        exit();
    }
}

// Fetch all rides
$sql = "SELECT * FROM ride";
$result = $connect->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Rides</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Rides List</h2>
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
                    <th>RIDE ID</th>
                    <th>Name</th>
                    <th>Start Location</th>
                    <th>End Location</th>
                    <th>Mobile</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['rideid']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['startlocation']; ?></td>
                    <td><?php echo $row['endlocation']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td>
                        <a href="update_ride.php?id=<?php echo $row['rideid']; ?>" class="btn btn-primary btn-sm">Update</a>
                        <a href="view_ride.php?delete=<?php echo $row['rideid']; ?>" 
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this ride?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>