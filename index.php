<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
// Include the header file
    $title ="Home - LinnaTaxi";
    include 'header.php';
    ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="index.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" />
  </head>
  <body>
    <div class="first-frame">
      <div class="container">
        <div class="row min-vh-100">
          <div class="col-lg-7 text-center text-lg-start mb-4 mb-lg-0">
            <h1>
              Ride Smart, Stay Safe <br />
              Linna Taxi Delivers Comfort
            </h1>
            <br/>
            <p>
              We are providing smart passenger rides with safe, comfortable, and
              affordable services.<br />
              Ensuring every ride is smooth and stress-free.<br />
              Linna Taxi empowers drivers to build their carriers while serving
              the community.
            </p>
          </div>
          <div class="col-lg-5 position-relative">
            <div class="image-stack">
              <img src="Images/HomeFrame1.png" alt="Linna Taxi Illustration" class="img-1" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="second-frame">
      <div class="container">
        <div class="row align-items-center min-vh-100">
          <div class="col-lg-6 text-center mb-4 mb-lg-0">
            <img
              src="Images/PhoneMap.jpg"
              alt="App Mockup"
              class="img-fluid app-mockup"
            />
          </div>
          <div class="col-lg-6">
            <h2>This is your LinnaTaxi App and<br />How it works?</h2>
            <ul class="custom-list">
              <li>
                <strong>Book in Just 2 Taps</strong>Key in your pickup and
                drop-off locations to get your estimated fare.
              </li>
              <li>
                <strong>Get a Driver</strong>LinnaTaxi will find you the nearest
                available driver.
              </li>
              <li>
                <strong>Track Your Driver</strong>Know your driver's location
                and estimated time of arrival in real-time.
              </li>
              <br />
            </ul>
            <p class="download-text">Download Our App Now!</p>
            <div class="download-buttons">
              <a href="https://play.google.com/store">
                <img src="Images/GooglePlay.png" alt="Google Play" />
              </a>
              <a href="https://www.apple.com/app-store/">
                <img src="Images/AppStore.png" alt="App Store" />
              </a>
              <a href="https://consumer.huawei.com/fi/mobileservices/appgallery/">
                <img src="Images/AppGallery.png" alt="App Gallery" />
              </a>
              <a href="https://apps.microsoft.com/home">
                <img src="Images/WinStore.png" alt="Windows Store" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
// Include the header file
    include 'footer.php';
    ?>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

