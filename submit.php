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

// Get form data
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'] ?? null; // Optional
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$address = $_POST['address'];
$course_section = $_POST['course_section'];

// Insert data into the database
$sql = "INSERT INTO users (firstname, middlename, lastname, age, address, course_section) 
        VALUES ('$firstname', '$middlename', '$lastname', $age, '$address', '$course_section')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
header("Location: index.php");
exit;
?>
