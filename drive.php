<?php
include 'db_connect.php'; // Include database connection
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive - LinnaTaxi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/drive.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
  <?php 
// Include the header file
    include 'header.php';
    ?>

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
              <form action="crud/data_drive.php" class="form" method="post" id="driverForm">
    <div class="input-box">
        <input type="text" class="form-control" name="firstName" placeholder="First name" required>
        <input type="text" class="form-control" name="lastName" placeholder="Last name" required>
        <input type="email" class="form-control" name="email" placeholder="Email" required>
        <input type="text" class="form-control" name="mobile" placeholder="Mobile" required>
        <input type="text" class="form-control" name="vehicleType" placeholder="Vehicle Type" required>
        <input type="text" class="form-control" name="vehicleMake" placeholder="Vehicle Make" required>
        <input type="text" class="form-control" name="vehicleModel" placeholder="Vehicle Model" required>
        <select class="form-select" name="availability" required>
            <option value="">Availability</option>
            <option value="full-time">Full time</option>
            <option value="part-time">Part time</option>
        </select>
        <select class="form-select" name="workingDistrict" required>
            <option value="">Working District</option>
            <option value="hämeenlinna">Hämeenlinna</option>
        </select>
        
        <div class="d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-primary" type="submit">Register</button>
        </div>
    </div>
</form>


<div class="overlay" id="overlay"></div>
<div class="popup" id="popup">
    <img src="Images/thic.png" alt="tick">
    <h3>Thank you!</h3>
    <p class="tickbox">Your details has been successfully submitted.</p>
    <button type="button" onclick="closePopup()">Ok</button>
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

    <?php include 'footer.php'; ?>

    <script>
      //display the popup and overlay
function showPopup() {
    document.getElementById('popup').classList.add('show');
    document.getElementById('overlay').classList.add('show');
    document.body.style.overflow = 'hidden';
}
//hide the popup and overlay
function closePopup() {
    document.getElementById('popup').classList.remove('show');
    document.getElementById('overlay').classList.remove('show');
    document.body.style.overflow = 'auto';
}

// Add click  submit button
document.querySelector('.btn-primary').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form submission
    showPopup(); // Show popup immediately on button click
});

// Close popup  clicking overlay
document.getElementById('overlay').addEventListener('click', closePopup);

// Close popup  ESC key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape' && document.getElementById('popup').classList.contains('show')) {
        closePopup();
    }
});

// Close popup  clicking the Ok button
document.querySelector('.popup button').addEventListener('click', function() {
    closePopup();
 
    document.getElementById('driverForm').submit();
});
</script>
  </body>
</html>