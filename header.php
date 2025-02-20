<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes"/>

        <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap"rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles/header.css" />
    <title>Header - LinnaTaxi</title>
  </head>

  <body>
<header class="header fixed-top">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <div class="logo">
            <img src="Images/Logo.png" alt="LinnaTaxi Logo" class="img-fluid" />
          </div>

          <!-- Hamburger Button -->
          <button
            class="navbar-toggler custom-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav" >
            <ul class="navbar-nav">
              <li class="nav-item"> <a href="index.php" class="menu-button">Home</a> </li>
              <li class="nav-item"> <a href="ride.php" class="menu-button">Ride</a> </li>
              <li class="nav-item"> <a href="drive.php" class="menu-button">Drive</a> </li>
              <li class="nav-item"> <a href="aboutus.php" class="menu-button">About Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>