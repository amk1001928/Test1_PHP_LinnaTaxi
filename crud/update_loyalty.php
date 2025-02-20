<?php
include '../db_connect.php';

if (!isset($_GET['id'])) {
    header("Location: view_loyalty.php");
    exit();
}

$id = $_GET['id'];

// Handle Update
if (isset($_POST['submit'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $phoneNo = $_POST['phone_no'];
    $email = $_POST['email'];

    $update_query = "UPDATE loyalty_customers SET 
        first_name = '$firstName',
        last_name = '$lastName',
        phone_no = '$phoneNo',
        email = '$email'
        WHERE id = '$id'";

    if ($connect->query($update_query) === TRUE) {
        header("Location: view_loyalty.php?msg=updated");
        exit();
    }
}

// Fetch current loyalty member data
$sql = "SELECT * FROM loyalty_customers WHERE id = '$id'";
$result = $connect->query($sql);
$member = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Loyalty Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Update Loyalty Member Information</h2>
            <a href="index.php" class="btn btn-secondary">Back to Loyalty List</a>
        </div>

        <form method="POST" action="">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" 
                           value="<?php echo $member['first_name']; ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" 
                           value="<?php echo $member['last_name']; ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone_no" 
                           value="<?php echo $member['phone_no']; ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" 
                           value="<?php echo $member['email']; ?>" required>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update Member</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>