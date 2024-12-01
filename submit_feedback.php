<?php
 
   session_start();

   include("php/config.php");
  
//pasindu

 // Including the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data from POST request
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $message = $_POST['message'];

    // Prepare an SQL statement to avoid SQL injection
    $stmt = $con->prepare("INSERT INTO feedback (name, phone, email, company, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $phone, $email, $company, $message);

    // Execute the query and check if successful
    if ($stmt->execute()) {
        echo 'success'; // Return a success message for the JavaScript to handle
    } else {
        echo 'error'; // Return an error message
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
}
?>
