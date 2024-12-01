<?php
// Connect to the database
$connection = mysqli_connect('localhost', 'root', '', 'tutorial');

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if 'id' is set in the URL
if (isset($_GET['id'])) {
    $payment_ID = $_GET['id'];

    // Prepare the DELETE query
    $query = "DELETE FROM payment_details WHERE payment_ID='$payment_ID'";

    // Execute the query
    $result = mysqli_query($connection, $query);

    if (!$result) {
        error_log("Delete failed! Error: " . mysqli_error($connection)); // Log error
        die("Delete Failed! Please try again later.");
    } else {
        // Redirect to the dashboard after successful deletion
        header("Location: payment_database.php");
        exit();
    }
} else {
    die("Invalid Payment ID.");
}

// Close the connection
mysqli_close($connection);
?>