<?php

//pasindu

session_start();

include("php/config.php");


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    // Prepare and bind
    $stmt = $con->prepare("DELETE FROM feedback WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Feedback deleted successfully!";
    } else {
        echo "Error deleting feedback: " . $stmt->error;
    }
    $stmt->close();
    $con->close();
    header("Location: user_profile.php"); // Redirect back to the user profile page
    exit;
}
?>
