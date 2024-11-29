<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "radiant_dental");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variables for patient data (you can replace these with dynamic form inputs later)
$first_name = "John";
$last_name = "Doe";
$dob = "1990-01-01";
$phone = "1234567890";
$email = "john.doe@example.com";

// SQL query to insert a new patient
$sql = "INSERT INTO patients (first_name, last_name, dob, phone, email)
        VALUES ('$first_name', '$last_name', '$dob', '$phone', '$email')";

// Check if the query is successful
if ($conn->query($sql) === TRUE) {
    echo "New patient added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>