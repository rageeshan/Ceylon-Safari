<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    // Get POST data directly without checking if set, assuming fields are required in the form
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

    // Database connection
    $connection = mysqli_connect('localhost', 'root', '', 'tutorial');

    // Check connection
    if ($connection->connect_error) {
        die('Connection Failed: ' . $connection->connect_error);
    }

    // Prepare SQL query
    $sql = "INSERT INTO bookingForm (firstName, lastName, nic, email, number, address1, address2, city, postal, adult, children, date, time)
            VALUES ('$firstName', '$lastName', '$nic', '$email', '$number', '$address1', '$address2', '$city', '$postal', '$adult', '$children', '$date', '$time')";

    // Execute the query
    if ($connection->query($sql) === TRUE) {
        header("refresh:1;url=payment_page.php");
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;


    // Close the connection
    $connection->close();
}
}


?>