<?php
// Database connection
$connection = mysqli_connect('localhost', 'root', '', 'tutorial');

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $card_number = $_POST['card_number'];
    $cardholder_name = $_POST['cardholder_name'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];
    
    $payment_ID = $_POST['payment_ID'];

    // Prepare the SQL statement to update payment details
    $sql = "UPDATE payment_details 
            SET card_number='$card_number', 
                cardholder_name='$cardholder_name', 
                expiry_date='$expiry_date', 
                cvv='$cvv' 
            WHERE payment_ID='$payment_ID'";

    // Execute the query and check for success
    if (mysqli_query($connection, $sql)) {
        echo "<div class='message'>
                <p>Profile Updated!</p>
              </div><br>";
        echo "<a href='payment_database.php'><button class='btn'>Go to Dashboard</button></a>";
    } else {
        echo "<div class='message'>
                <p>Error occurred: " . mysqli_error($connection) . "</p>
              </div>";
    }
} else {
    // Handle the case where the form is not submitted
    echo "<div class='message'>
            <p>No data submitted.</p>
          </div>";
}

// Close the database connection
mysqli_close($connection);
?>