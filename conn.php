<?php
// Database configuration
$servername = "localhost";
$username = "maybel"; // Update with your MySQL username
$password = "maybel";     // Update with your MySQL password
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>