<?php
include 'db_connect.php';

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_query = "DELETE FROM loyalty_customers WHERE id = '$id'";
    if ($connect->query($delete_query) === TRUE) {
        header("Location: view_loyalty.php?msg=deleted");
        exit();
    }
}

// Fetch all loyalty members
$sql = "SELECT * FROM loyalty_customers";
$result = $connect->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Loyalty Members</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Loyalty Members List</h2>
            <a href="index.php" class="btn btn-secondary">Back to Dashboard</a>
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
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['phone_no']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <a href="update_loyalty.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Update</a>
                        <a href="view_loyalty.php?delete=<?php echo $row['id']; ?>" 
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this member?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>