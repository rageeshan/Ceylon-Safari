<?php
$connection = mysqli_connect('localhost', 'root', '', 'tutorial');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the booking ID and other form data
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

    // Update query to modify the existing booking details
    $query = "UPDATE bookingForm 
              SET firstName='$firstName', lastName='$lastName', nic='$nic', email='$email', number='$number', 
                  address1='$address1', address2='$address2', city='$city', postal='$postal', 
                  adult='$adult', children='$children', date='$date', time='$time' 
              WHERE bookingId='$bookingId'";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        error_log("Update failed! Error: " . mysqli_error($connection)); // Log error
        die("Update Failed! Please try again later.");
    }
     else {
        // Redirect to success or booking list page after updating
        header("refresh:1;url=dashboard.php"); // Redirect after successful update
        exit();
    }
}
?>
