<?php
include 'db_connect.php';

if (!isset($_GET['id'])) {
    header("Location: view_drivers.php");
    exit();
}

$id = $_GET['id'];

// Handle Update
if (isset($_POST['submit'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $vehicleType = $_POST['vehicle_type'];
    $vehicleMake = $_POST['vehicle_make'];
    $vehicleModel = $_POST['vehicle_model'];
    $availability = $_POST['availability'];
    $workingDistrict = $_POST['working_district'];

    $update_query = "UPDATE drivers SET 
        first_name = '$firstName',
        last_name = '$lastName',
        email = '$email',
        mobile = '$mobile',
        vehicle_type = '$vehicleType',
        vehicle_make = '$vehicleMake',
        vehicle_model = '$vehicleModel',
        availability = '$availability',
        working_district = '$workingDistrict'
        WHERE driver_id = '$id'";

    if ($connect->query($update_query) === TRUE) {
        header("Location: view_drivers.php?msg=updated");
        exit();
    }
}

// Fetch current driver data
$sql = "SELECT * FROM drivers WHERE driver_id = '$id'";
$result = $connect->query($sql);
$driver = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Driver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Update Driver Information</h2>
            <a href="view_drivers.php" class="btn btn-secondary">Back to Drivers List</a>
        </div>

        <form method="POST" action="">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" value="<?php echo $driver['first_name']; ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="<?php echo $driver['last_name']; ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $driver['email']; ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Mobile</label>
                    <input type="text" class="form-control" name="mobile" value="<?php echo $driver['mobile']; ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Vehicle Type</label>
                    <input type="text" class="form-control" name="vehicle_type" value="<?php echo $driver['vehicle_type']; ?>" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Vehicle Make</label>
                    <input type="text" class="form-control" name="vehicle_make" value="<?php echo $driver['vehicle_make']; ?>" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Vehicle Model</label>
                    <input type="text" class="form-control" name="vehicle_model" value="<?php echo $driver['vehicle_model']; ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Availability</label>
                    <input type="text" class="form-control" name="availability" value="<?php echo $driver['availability']; ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Working District</label>
                    <input type="text" class="form-control" name="working_district" value="<?php echo $driver['working_district']; ?>" required>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update Driver</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>