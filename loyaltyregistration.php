
<?php
include 'db_connect.php'; // Include database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Loyalty Programe - LinnaTaxi</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles/loyaltyregistration.css" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
</head>

<body>

<div class="container">
  <h1>LinnaTaxi<br>Customer Loyalty Registration</h1>
  <form id="registerForm" action="crud/dataloyalty.php" method="post">
        <input type="text" name="firstName" placeholder="First Name" required><br>
        <input type="text" name="lastName" placeholder="Last Name" required><br>
        <input type="text" name="phoneNo" placeholder="Phone No" required><br>
        <input type="email" name="email" placeholder="E-Mail" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        
        <button type="submit" class="btn">Register</button><br>

        <button type="button" onclick="redirectToIndex()">Cancel</button>

    </form>
</div>

<!-- Popup Modal -->
<div class="popup" id="popup">
    <img src="Images/thic.png" alt="tick">
    <h3>Thank you!</h3>
    <p class="tickbox">Your details have been successfully submitted.</p>
    <button type="button" onclick="redirectToIndex()">OK</button>
</div>

<script>
document.getElementById("registerForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    let inputs = document.querySelectorAll("#registerForm input[required]");
    let allFilled = true;

    inputs.forEach(input => {
        if (!input.value.trim()) {
            allFilled = false;
            input.style.borderColor = "red"; // Highlight empty fields
        } else {
            input.style.borderColor = ""; // Reset border for filled fields
        }
    });

    if (allFilled) {
        let popup = document.getElementById("popup");
        popup.classList.add("open-popup");
        this.submit();
    }
});

function redirectToIndex() {
    window.location.href = "index.php"; // Redirect to index.php
}
</script>

</body>
</html>
