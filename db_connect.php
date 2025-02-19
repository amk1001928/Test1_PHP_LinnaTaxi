<?php
// Increase memory limit (temporary)
ini_set('memory_limit', '1024M');

// Assigning of server information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "linnataxi";

// creating connection 
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

?>
