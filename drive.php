<?php
session_start();
include 'db_drive_connect.php'; // Include database connection
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="drive.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <?php include 'header.php'; ?>

    <section class="first-frame">
      <div class="container-fluid px-0">
        <div class="row g-0">
          <!-- Driver Image Column (Left) -->
          <div class="col-lg-6 driver-column">
            <div class="driver">
              <img src="Images/driver.jpeg" alt="driver">
            </div>
          </div>

          <!-- Form Column (Right) -->
          <div class="col-lg-6 form-column">
            <div class="form-wrapper">
              <h1 class="signup">Signup to Drive LinnaTaxi</h1>
              <form action="data_drive.php" class="form" method="post" id="driverForm">
    <div class="input-box">
        
        <input type="text" class="form-control" name="firstName" placeholder="First name" value="<?php echo isset($_COOKIE['firstName']) ? htmlspecialchars($_COOKIE['firstName']) : ''; ?>" required>
        <input type="text" class="form-control" name="lastName" placeholder="Last name" value="<?php echo isset($_COOKIE['lastName']) ? htmlspecialchars($_COOKIE['lastName']) : ''; ?>" required>
        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo isset($_COOKIE['email']) ? htmlspecialchars($_COOKIE['email']) : ''; ?>" required>
        <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo isset($_COOKIE['mobile']) ? htmlspecialchars($_COOKIE['mobile']) : ''; ?>" required>
        <input type="text" class="form-control" name="vehicleType" placeholder="Vehicle Type" value="<?php echo isset($_COOKIE['vehicleType']) ? htmlspecialchars($_COOKIE['vehicleType']) : ''; ?>" required>
        <input type="text" class="form-control" name="vehicleMake" placeholder="Vehicle Make" value="<?php echo isset($_COOKIE['vehicleMake']) ? htmlspecialchars($_COOKIE['vehicleMake']) : ''; ?>" required>
        <input type="text" class="form-control" name="vehicleModel" placeholder="Vehicle Model" value="<?php echo isset($_COOKIE['vehicleModel']) ? htmlspecialchars($_COOKIE['vehicleModel']) : ''; ?>" required>
       

        <select class="form-select" name="availability" required>
            <option value="">Availability</option>
            <option value="full-time" <?php echo (isset($_COOKIE['availability']) && $_COOKIE['availability'] == 'full-time') ? 'selected' : ''; ?>>Full time</option>
            <option value="part-time" <?php echo (isset($_COOKIE['availability']) && $_COOKIE['availability'] == 'part-time') ? 'selected' : ''; ?>>Part time</option>
        </select>

        <select class="form-select" name="workingDistrict" required>
            <option value="">Working District</option>
            <option value="hämeenlinna" <?php echo (isset($_COOKIE['workingDistrict']) && $_COOKIE['workingDistrict'] == 'hämeenlinna') ? 'selected' : ''; ?>>Hämeenlinna</option>
       
        </select>


        <div class="d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-primary" type="submit">Register</button>
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
        </div>
      </div>
    </section>

    <section class="second-frame">
      <div class="container-fluid px-0">
        <div class="row g-0">
          <div class="col-lg-6">
            <div class="download-section">
              <div class="app-image-container">
                <img src="Images/driveapp.png" alt="download app" class="download-app">
              </div>
              <div class="download-content">
                <p class="download-text">Download Our App Now!</p>
                <div class="download-buttons">
                  <a href="https://play.google.com/store">
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

          <div class="col-lg-6">
            <div class="description">
              <h2>Opportunities are Endless with LinnaTaxi</h2>
              <p class="last">
                If you own a Car, SUV, Van, Cab, Mini Van, We got rides for you! Join
                the largest network of drivers in the country & make driving fun while
                you earn over 5,000 Euros per month.<br>
              </p>
              <ul>
                <li>Enjoy a Monthly Income of 5,000 Euros & upwards</li>
                <li>Get a Life Insurance Cover of 100,000 Euros (Inclusive critical illness)</li>
                <li>Earn weekly and daily incentives</li>
                <li>Pay Lesser Commission while receiving Higher Earnings</li>
                <li>Immediate Earnings regardless of payment methods</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="popup" id="popup">
      <img src="Images/thic.png" alt="tick">
      <h3>Thank you!</h3>
      <p class="tickbox">Your details has been successfully submitted.</p>
      <button class="btn btn-primary" type="button" onclick="closePopup()">Ok</button>
    </div>

    <?php include 'footer.php'; ?>

    <script>
function closePopup() {
    let popup = document.getElementById("popup");
    popup.classList.remove("open-popup");
}

document.getElementById('driverForm').addEventListener('submit', function(event) {
    let inputs = document.querySelectorAll('.form input[required], .form select[required]');
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
        }, 500);
    }
});
</script>
  </body>
</html>