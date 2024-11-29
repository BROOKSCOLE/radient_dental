<?php
include 'db_connect.php';

// Fetch patients
$patients_query = "SELECT * FROM patients";
$patients_result = $conn->query($patients_query);

// Fetch future appointments
$future_appointments_query = "SELECT * FROM appointments WHERE appointment_date >= CURDATE()";
$future_appointments_result = $conn->query($future_appointments_query);

// Fetch past appointments
$past_appointments_query = "SELECT * FROM appointments WHERE appointment_date < CURDATE()";
$past_appointments_result = $conn->query($past_appointments_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Reports</title>
</head>
<body>
    <h1>Staff Reports</h1>

    <h2>Patients List</h2>
    <ul>
        <?php while ($row = $patients_result->fetch_assoc()): ?>
            <li><?php echo $row['name'] . " - " . $row['email']; ?></li>
        <?php endwhile; ?>
    </ul>

    <h2>Future Appointments</h2>
    <ul>
        <?php while ($row = $future_appointments_result->fetch_assoc()): ?>
            <li><?php echo "Appointment ID: " . $row['appointment_id'] . " on " . $row['appointment_date']; ?></li>
        <?php endwhile; ?>
    </ul>

    <h2>Past Appointments</h2>
    <ul>
        <?php while ($row = $past_appointments_result->fetch_assoc()): ?>
            <li><?php echo "Appointment ID: " . $row['appointment_id'] . " on " . $row['appointment_date']; ?></li>
        <?php endwhile; ?>
    </ul>
</body>
</html>