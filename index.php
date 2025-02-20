<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home - LinnaTaxi</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles/index.css" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
</head>

<body>

<!-- Include Header -->
<?php include 'header.php'; ?>

<div class="first-frame">
  <div class="container">
    <div class="row min-vh-100">
      <div class="col-lg-7 text-lg-start mb-4 mb-lg-0">
        <h1 class="mb-3">Ride Smart, Stay Safe<br />Linna Taxi Delivers Comfort</h1>
        <p>
          We provide smart passenger rides with safe, comfortable, and affordable services.
          Ensuring every ride is smooth and stress-free.
          Linna Taxi empowers drivers to build their careers while serving the community.<br>
        </p>
        <button class="register-button" onclick="window.location.href='loyaltyregistration.php'">
        Join & Enjoy Exclusive Rewards ! <br> Register Now...!
    </button>
      </div>


      <div class="col-lg-5">
        <div class="image-stack">
          <img src="Images/HomeFrame1.png" alt="Illustration of Linna Taxi service" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
</div>

<div class="second-frame">
  <div class="container">
    <div class="row align-items-center min-vh-100">
      <div class="col-lg-6 text-center mb-4 mb-lg-0">
        <img src="Images/PhoneMap.jpg" alt="LinnaTaxi app interface on phone" class="img-fluid app-mockup" />
      </div>
      <div class="col-lg-6">
        <h2 class="mb-4">Your LinnaTaxi App: How It Works</h2>
        <ul class="custom-list">
          <li><strong>Book in Just 2 Taps:</strong> Enter your pickup and drop-off locations to get an estimated fare.</li>
          <li><strong>Get a Driver:</strong> LinnaTaxi will find the nearest available driver.</li>
          <li><strong>Track Your Driver:</strong> See your driver's location and estimated arrival time in real-time.</li>
        </ul>

        <p class="mt-4">Download Our App Now!</p>
        <div class="download-buttons">
          <a href="https://play.google.com/store" aria-label="Download from Google Play">
            <img src="Images/GooglePlay.png" alt="Google Play Store" class="img-fluid" />
          </a>
          <a href="https://www.apple.com/app-store/" aria-label="Download from App Store">
            <img src="Images/AppStore.png" alt="Apple App Store" class="img-fluid" />
          </a>
          <a href="https://consumer.huawei.com/fi/mobileservices/appgallery/" aria-label="Download from Huawei AppGallery">
            <img src="Images/AppGallery.png" alt="Huawei AppGallery" class="img-fluid" />
          </a>
          <a href="https://apps.microsoft.com/home" aria-label="Download from Microsoft Store">
            <img src="Images/WinStore.png" alt="Microsoft Store" class="img-fluid" />
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Include Footer -->
<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
