<?php
require 'connection.php';

// Fetch all entries from the admininformation table
$sql = "SELECT Name, Contact, Email FROM admininformation";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_dashboard.css">
</head>
<body>

<div id="dashboard-container">
    <h2 class="title">Admin Details</h2>
    <a href="Admincontrol.php" class="btn">Manage Admin Accounts</a>
    <?php
    
    if ($result->num_rows > 0) {
        // Loop through and display each entry
        while ($row = $result->fetch_assoc()) {
            echo "<div class='feedback-entry'>";
            echo "<p><strong>Name:</strong> " . htmlspecialchars($row['Name']) . "</p>";
            echo "<p><strong>Contact:</strong> " . htmlspecialchars($row['Contact']) . "</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($row['Email']) . "</p>";
            echo "<div class='action-buttons'>";
            // Update button calls updateUser function
            echo "<button onclick=\"openUpdateModal('" . htmlspecialchars($row['Email']) . "', '" . htmlspecialchars($row['Name']) . "', '" . htmlspecialchars($row['Contact']) . "')\" class='btn-update'>Update</button>";
            echo "<a href='delete.php?email=" . urlencode($row['Email']) . "' class='btn-delete' onclick=\"return confirm('Are you sure you want to delete this user?');\">Delete</a>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p class='no-feedback'>No user found.</p>";
    }
    $con->close(); 
    ?>
</div>

<!-- Modal for updating user details -->
<div id="updateModal" style="display:none;">
    <div class="modal-header">
        <h2>Update User Details</h2>
    </div>
    <form id="updateForm" class="modal-body">
        <input type="hidden" name="email" id="email">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        
        <label for="contact">Contact:</label>
        <input type="text" name="contact" id="contact" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        
        <div id="modalMessage"></div>
        
        <div class="modal-footer">
            <button type="submit" class="save">Update</button>
            <button type="button" id="closeModal" class="cancel">Cancel</button>
        </div>
    </form>
</div>


<script src="update.js"></script>
</body>
</html>
