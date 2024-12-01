



<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $adminName = $_POST["aname"];
    $adminContact = $_POST["acontact"];
    $adminEmail = $_POST["aemail"];
    $adminPassword = $_POST["apassword"]; // Ensure this matches your form input name

    // Prepare an SQL statement
    $stmt = $con->prepare("INSERT INTO admininformation (Name, Contact, Email, Password) VALUES ('$adminName','$adminContact','$adminEmail','$adminPassword')");
    
    
     
    if ($stmt->execute()) {
        // Redirect to admincontrol.html with a success message
        header("Location: admin_dashboard.php?message=registered_successfully");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}


$con->close();
?>
