<?php
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $password = $_POST['password']; // Assuming you will hash the password before storing

    // Prepare an update statement
    $stmt = $con->prepare("UPDATE admininformation SET Name=?, Contact=?, Password=? WHERE Email=?");
    $stmt->bind_param("ssss", $name, $contact, $password, $email);

    if ($stmt->execute()) {
        echo json_encode(['message' => 'Update successfully']);
    } else {
        echo json_encode(['message' => 'Update failed: ' . $stmt->error]);
    }

    $stmt->close();
    $con->close();
}
?>
