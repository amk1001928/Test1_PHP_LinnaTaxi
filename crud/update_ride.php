<?php
include '../db_connect.php';

if (!isset($_GET['id'])) {
    header("Location: view_ride.php");
    exit();
}

$id = $_GET['id'];

// Handle Update
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $startlocation = $_POST['startlocation'];
    $endlocation = $_POST['endlocation'];
    $mobile = $_POST['mobile'];

    $update_query = "UPDATE ride SET 
        name = '$name',
        startlocation = '$startlocation',
        endlocation = '$endlocation',
        mobile = '$mobile'
        WHERE rideid = '$id'";

    if ($connect->query($update_query) === TRUE) {
        header("Location: view_ride.php?msg=updated");
        exit();
    }
}

// Fetch current ride data
$sql = "SELECT * FROM ride WHERE rideid = '$id'";
$result = $connect->query($sql);
$ride = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Ride</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Update Ride Information</h2>
            <a href="view_ride.php" class="btn btn-secondary">Back to Rides List</a>
        </div>

        <form method="POST" action="">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" 
                           value="<?php echo $ride['name']; ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Mobile</label>
                    <input type="text" class="form-control" name="mobile" 
                           value="<?php echo $ride['mobile']; ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Start Location</label>
                    <input type="text" class="form-control" name="startlocation" 
                           value="<?php echo $ride['startlocation']; ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">End Location</label>
                    <input type="text" class="form-control" name="endlocation" 
                           value="<?php echo $ride['endlocation']; ?>" required>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update Ride</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>