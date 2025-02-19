<?php
session_start(); // Start the session at the very beginning
include 'db_connect_ride.php'; 
if(isset($_GET['signup']) && $_GET['signup'] == 'success') {
    if(isset($_SESSION['user_name'])) {
        setcookie("user_name", $_SESSION['user_name'], time() + (86400 * 30), "/"); // 30 days
        setcookie("user_mobile", $_SESSION['user_mobile'], time() + (86400 * 30), "/");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
// Include the header file
    $title ="Ride - LinnaTaxi";
    include 'header.php';
    ?>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Connect to CSS files -->
    <link rel="stylesheet" href="ride.css">
    <link rel="stylesheet" href="header.css">
    
    <!-- Connect to Google for Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
        <!-- First Frame Section -->
    <section class="details">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                <div class="calling">
    <h3 class="mb-4">Apply for your ride now!</h3>
    <div class="application">
        <form action="dataride.php" class="form" method="post" id="riderForm">
            <div class="input-box">
                <input type="text" class="form-control" name="name" 
                    value="<?php echo isset($_COOKIE['user_name']) ? htmlspecialchars($_COOKIE['user_name']) : ''; ?>" 
                    placeholder="Name" required>
                <input type="text" class="form-control" name="startlocation" 
                    placeholder="Start Location" required>
                <input type="text" class="form-control" name="endlocation" 
                    placeholder="End Location" required>
                <input type="tel" class="form-control" name="mobile" 
                    value="<?php echo isset($_COOKIE['user_mobile']) ? htmlspecialchars($_COOKIE['user_mobile']) : ''; ?>" 
                    placeholder="Mobile" required>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="btn btn-primary" type="submit">Apply</button>
                </div>
            </div>
        </form>
        
        <div class="popup" id="popup"> 
            <img src="Images/thic.png" alt="tick">
            <h3>Thank you!</h3>
            <p class="tickbox">Your details has been successfully submitted.</p>
            <button class="btn btn-primary" type="button" onclick="closePopup()">Ok</button>
        </div>
    </div>
</div> 
                        <h3 class="mb-3">Scan the QR Now!</h3>
                        <img src="Images/QR.jpg" alt="QR Code" class="qr-code mb-4">
                        
                        <h3 class="mb-3">Download Our App Now!</h3>
                        <div class="downloads">
                            <a href="https://play.google.com/store/games">
                                <img src="Images/GooglePlay.png" alt="Google Play">
                            </a>
                            <a href="https://www.apple.com/app-store/">
                                <img src="Images/AppStore.png" alt="App Store">
                            </a>
                            <a href="https://consumer.huawei.com/fi/mobileservices/appgallery/">
                                <img src="Images/AppGallery.png" alt="App Gallery">
                            </a>
                            <a href="https://apps.microsoft.com/home">
                                <img src="Images/WinStore.png" alt="Windows Store">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Second Frame Section -->
    <section class="benefits-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="benefits-content">
                        <p class="lead mb-4">
                            <b>Where it all began...!</b><br> <b>LinnaTaxi Ride-Hailing is a seamless transport solution that
                            arrives within minutes to wherever you are, featuring the best rates and the
                            largest fleet of vehicles in Hameenlinna including Cars, SUVs, Vans, Cabs and
                            Mini Vans offering you comfort and safety throughout the journey.</b>
                        </p>
                        <h2 class="mb-4">Benefits:</h2>
                        <ul class="benefits-list">
                            <li>Simultaneous multiple ride bookings</li>
                            <li>Live location share</li>
                            <li>In-app SOS function</li>
                            <li>Schedule and book later function</li>
                            <li>Multiple drops</li>
                            <li>In-app feedback/complaint system</li>
                            <li>24x7 customer support</li>
                            <li>Earn LinnaTaxi rewards and climb up the loyalty tier for better offers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
function closePopup() {
    let popup = document.getElementById("popup");
    popup.classList.remove("open-popup");
    
    // Clear form inputs after closing popup
    let form = document.getElementById('riderForm');
    let inputs = form.querySelectorAll('input[type="text"], input[type="tel"]');
    inputs.forEach(input => {
        // Don't clear the name and mobile if they come from cookies
        if (input.name !== 'name' && input.name !== 'mobile') {
            input.value = '';
        }
    });
}

document.getElementById('riderForm').addEventListener('submit', function(event) {
    let inputs = document.querySelectorAll('.form input[required]');
    let allFilled = true;

    inputs.forEach(input => {
        if (!input.value.trim()) {
            allFilled = false;
            input.style.borderColor = "red";
        } else {
            input.style.borderColor = "";
        }
    });

    if (!allFilled) {
        event.preventDefault();
    } else {
        // Show popup after successful submission
        setTimeout(() => {
            let popup = document.getElementById("popup");
            popup.classList.add("open-popup");
            
            // Clear only location fields immediately after submission
            let form = document.getElementById('riderForm');
            let locationInputs = form.querySelectorAll('input[name="startlocation"], input[name="endlocation"]');
            locationInputs.forEach(input => {
                input.value = '';
            });
        }, 500);
    }
});
</script>
    <?php
// Include the header file
    include 'footer.php';
    ?>
</body>
</html>