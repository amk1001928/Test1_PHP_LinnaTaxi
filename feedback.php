<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinnaTaxi - Home</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="AboutUs.css">
    <link rel="stylesheet" href="header.css">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
        <header class="header fixed-top">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="logo">
                    <img src="Images/Logo.png" alt="LinnaTaxi Logo" class="img-fluid" />
                    </div>
                        <!-- Hamburger Button -->
                        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="index.html" class="menu-button">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="ride.html" class="menu-button">Ride</a>
                            </li>
                            <li class="nav-item">
                                <a href="drive.html" class="menu-button">Drive</a>
                            </li>
                            <li class="nav-item">
                                <a href="AboutUs.html" class="menu-button">About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="first-frame">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-7">
                            <h2>How is your Ride......</h2>
                            <br>
                                <form>
                                    <label for="Driver-Performance">How would you rate the professionalism and behavior of your driver?</label>
                                    <br>
                                    <img src="Images/smile.png.jpg" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/medium.jpg" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/sad.jpg" class="sad">
                                    <br>
                                    <input type="checkbox"  id="Driver-Performance" name="Driver-Performance"  alt="Driver-Performance" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"  id="Driver-Performance" name="Driver-Performance" alt="Driver-Performance" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"  id="Driver-Performance" name="Driver-Performance"  alt="Driver-Performance" class="sad">
                                    <br>
                                    <label for="vehicle-condition">How would you rate the cleanliness and condition of the vehicle?</label>
                                    <br>
                                    <img src="Images/smile.png.jpg" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/medium.jpg" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/sad.jpg" class="sad">
                                    <br>
                                    <input type="checkbox"  id="vehicle-condition" name="vehicle-condition" alt="vehicle-condition"  class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"  id="vehicle-condition" name="vehicle-condition"  alt="vehicle-condition"class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"  id="vehicle-condition" name="vehicle-condition"alt="vehicle-condition" class="sad">
                                    <br>
                                    <label for="timeliness">How would you rate the punctuality of your driver?</label>
                                    <br>
                                    <img src="Images/smile.png.jpg" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/medium.jpg" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/sad.jpg" class="sad">
                                    <br>
                                    <input type="checkbox"  id="timeliness" name="timeliness"  alt="timeliness" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"  id="timeliness" name="timeliness"  alt="timeliness" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"  id="timeliness" name="timeliness" alt="timeliness" class="sad">
                                    <br>
                                    <label for="booking-process">How easy was it to book a ride using the Pick Me app?</label>
                                    <br>
                                    <img src="Images/smile.png.jpg" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/medium.jpg" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/sad.jpg" class="sad">
                                    <br>
                                    <input type="checkbox"  id="booking-process" name="booking-process"  alt="booking-process" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"  id="booking-process" name="booking-process" alt="booking-process" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"  id="booking-process" name="booking-process"  alt="booking-process" class="sad">
                                    <br>
                                    <label for="overall-satisfaction">How would you rate your overall experience with our service?</label>
                                    <br>
                                    <img src="Images/smile.png.jpg" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/medium.jpg" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/sad.jpg" class="sad">
                                    <br>
                                    <input type="checkbox"  id="overall-satisfaction" name="overall-satisfaction"  alt="overall-satisfaction" class="smile" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"  id="overall-satisfaction" name="overall-satisfaction"  alt="overall-satisfaction"class="medium" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"  id="overall-satisfaction" name="overall-satisfaction" alt="overall-satisfaction" class="sad">
                                    <br><br>

                                    <!--<input type="submit" value="Submit Feedback">-->
                                    <button type="submit" class="btn" onclick="openPopup(event)"> <strong>Submit</strong></button>  
                                    <div class="popup" id="popup"> 
                                        <img src="Images/thic.png" alt="tick">
                                        <h3>Thank you!</h3>
                                        <p class="tickbox"> Your feedback submitted.</p>
                                        <button type="button" onclick="closePopup()">OK</button>  
                                    </div>
                                </form>
                        </div>
                        <div class="col-5">

                        <img src="Images/feedback.jpg" alt="feedback" class="feedback" />
                        </div>

                    </div>
                </div>
            </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- java script for pop up -->
    <script>
        function closePopup() {
            let popup = document.getElementById("popup");
            popup.classList.remove("open-popup");
    
            let form = document.querySelector(".form");
            form.reset();
        }
    
        function openPopup(event) {
            event.preventDefault(); // Prevent form submission
    
            let inputs = document.querySelectorAll('.form input[required], .form select[required]');
            let allFilled = true;
    
            inputs.forEach(input => {
                if (!input.value.trim()) {  // Check if input/select is empty
                    allFilled = false;
                    input.style.borderColor = "red"; // Highlight empty fields
                } else {
                    input.style.borderColor = ""; // Reset border for filled fields
                }
            });
    
            if (allFilled) {
                let popup = document.getElementById("popup");
                popup.classList.add("open-popup");
            }
        }
        setTimeout(() => {
                    form.reset(); // Reset form fields
                }, 500); // Small delay to avoid instant reset
            
         </script>
</body>
</html>