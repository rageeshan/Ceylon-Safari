<?php


//pasindu

session_start();

include("php/config.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $message = $_POST['message'];

    // Prepare and bind
    $stmt = $con->prepare("UPDATE feedback SET message = ? WHERE id = ?");
    $stmt->bind_param("si", $message, $id);

    if ($stmt->execute()) {
        echo "Feedback updated successfully!";
        
    } else {
        echo "Error updating feedback: " . $stmt->error;
    }
    $stmt->close();
    $con->close();
    exit; // Stop further processing
}
?>
