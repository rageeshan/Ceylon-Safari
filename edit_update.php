<?php
// Database connection
$connection = mysqli_connect('localhost', 'root', '', 'tutorial');

// Check connection
if (!$connection) {
    die('Connection Failed: ' . mysqli_connect_error());
}

// Get the booking ID and updated form data
$bookingId = $_POST['bookingId'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$nic = $_POST['nic'];
$email = $_POST['email'];
$number = $_POST['number'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$postal = $_POST['postal'];
$adult = $_POST['adult'];
$children = $_POST['children'];
$date = $_POST['date'];
$time = $_POST['time'];

// Update the booking in the database
$sql = "UPDATE bookingForm 
        SET firstName='$firstName', lastName='$lastName', nic='$nic', email='$email', 
            number='$number', address1='$address1', address2='$address2', 
            city='$city', postal='$postal', adult='$adult', children='$children', 
            date='$date', time='$time' 
        WHERE bookingId='$bookingId'";

if ($connection->query($sql) === TRUE) {
    echo "Booking updated successfully!";
    header("Location: dashboard.php"); // Redirect back to dashboard
} else {
    echo "Error updating booking: " . $connection->error;
}

// Close the connection
mysqli_close($connection);
?>
