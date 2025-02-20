<?php
session_start();

// Check if admin is logged in
if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LinnaTaxi - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>LinnaTaxi Dashboard</h2>
            <div>
                <span class="me-3">Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></span>
                <a href="login.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Drivers</h5>
                        <a href="view_drivers.php" class="btn btn-primary">View Drivers</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Feedback</h5>
                        <a href="view_feedback.php" class="btn btn-primary">View Feedback</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Loyalty Members</h5>
                        <a href="view_loyalty.php" class="btn btn-primary">View Members</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rides</h5>
                        <a href="view_ride.php" class="btn btn-primary">View Rides</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>