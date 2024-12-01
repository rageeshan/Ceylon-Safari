<?php
require 'connection.php'; 

if (isset($_GET['email'])) { 
    $adminEmail = $_GET['email'];

    $sql = "DELETE FROM admininformation WHERE Email='$adminEmail'";

    if ($con->query($sql) === TRUE) {
        // Redirect to dashboard with success message
        header("Location: admin_dashboard.php?message=user_deleted");
        exit(); // Ensure no further code is executed
    } else {
        error_log("Delete Failed! Error: " . $con->error);
        die("Delete Failed: " . $con->error);
    }

    $con->close();
} else {
    die("Invalid email.");
}

mysqli_close($con); 
?>
