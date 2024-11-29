<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "radiant_dental");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch all patients
$sql = "SELECT * FROM patients";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Patient ID: " . $row["patient_id"] . " - Name: " . $row["first_name"] . " " . $row["last_name"] . "<br>";
    }
} else {
    echo "No patients found.";
}

// Close the connection
$conn->close();
?>
