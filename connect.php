<?php
// Database credentials
$servername = "localhost"; // Server where MySQL is hosted (localhost in this case)
$username = "root";        // Default MySQL username in XAMPP
$password = "";            // Default MySQL password in XAMPP (empty)
$dbname = "radiant_dental"; // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // If connection fails, display error message
} else {
    echo "Connected successfully!";
}
?>