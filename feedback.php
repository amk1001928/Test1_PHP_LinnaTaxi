<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - LinnaTaxi</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="aboutus.css">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    
<!-- Include Header -->
<?php include 'header.php'; ?>

          <div class="first-frame">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-7">
                            <h2>How is your Ride......</h2>
                            <br>
                                <form>
                                    <label for="driver-Performance">How would you rate the professionalism and behavior of your driver?</label>
                                    <br>
                                    <img src="Images/smile.png.jpg" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/medium.jpg" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/sad.jpg" class="sad">
                                    <br>
                                    <input type="radio"  id="driver_Performance" name="driver_Performance"  alt="driver_Performance" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio"  id="driver_Performance" name="driver_Performance" alt="driver_Performance" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio"  id="Driver_Performance" name="driver_Performance"  alt="driver_Performance" class="sad">
                                    <br>
                                    <label for="vehicle-condition">How would you rate the cleanliness and condition of the vehicle?</label>
                                    <br>
                                    <img src="Images/smile.png.jpg" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/medium.jpg" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/sad.jpg" class="sad">
                                    <br>
                                    <input type="radio"  id="vehicle_condition" name="vehicle_condition" alt="vehicle_condition"  class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio"  id="vehicle_condition" name="vehicle_condition"  alt="vehicle_condition"class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio"  id="vehicle_condition" name="vehicle_condition"alt="vehicle_condition" class="sad">
                                    <br>
                                    <label for="timeliness">How would you rate the punctuality of your driver?</label>
                                    <br>
                                    <img src="Images/smile.png.jpg" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/medium.jpg" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/sad.jpg" class="sad">
                                    <br>
                                    <input type="radio"  id="timeliness" name="timeliness"  alt="timeliness" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio"  id="timeliness" name="timeliness"  alt="timeliness" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio"  id="timeliness" name="timeliness" alt="timeliness" class="sad">
                                    <br>
                                    <label for="booking-process">How easy was it to book a ride using the Pick Me app?</label>
                                    <br>
                                    <img src="Images/smile.png.jpg" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/medium.jpg" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/sad.jpg" class="sad">
                                    <br>
                                    <input type="radio"  id="booking_process" name="booking_process"  alt="booking_process" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio"  id="booking_process" name="booking_process" alt="booking_process" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio"  id="booking_process" name="booking_process"  alt="booking_process" class="sad">
                                    <br>
                                    <label for="overall-satisfaction">How would you rate your overall experience with our service?</label>
                                    <br>
                                    <img src="Images/smile.png.jpg" class="smile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/medium.jpg" class="medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="Images/sad.jpg" class="sad">
                                    <br>
                                    <input type="radio"  id="overall_satisfaction" name="overall_satisfaction"  alt="overall_satisfaction" class="smile" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio"  id="overall_satisfaction" name="overall_satisfaction"  alt="overall_satisfaction"class="medium" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio"  id="overall_satisfaction" name="overall_satisfaction" alt="overall_satisfaction" class="sad">
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