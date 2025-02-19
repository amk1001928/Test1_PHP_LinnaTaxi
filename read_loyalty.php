<?php
include 'db_connect_home.php';

// SQL query to retrieve all loyalty members (excluding passwords for security)
$sql = "SELECT id, firstName, lastName, phoneNo, email FROM loyalty";
$result = $connect->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='update_loyalty.php?id={$row['id']}'>{$row['id']}</a></td>
                <td>{$row['firstName']}</td>
                <td>{$row['lastName']}</td>
                <td>{$row['phoneNo']}</td>
                <td>{$row['email']}</td>
                <td>
                    <a href='update_loyalty.php?id={$row['id']}' class='btn btn-primary btn-sm'>Update</a>
                </td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No loyalty members registered yet.";
}

// Close the connection
$connect->close();
?>