<?php 
   session_start();

   include("php/config.php");




 // Include the database connection

// Fetch all feedback entries from the feedback table
$sql = "SELECT id, name, phone, email, company, message FROM feedback";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Feedback Dashboard</title>
<link rel="stylesheet" href="user_feedback_dashboard.css"> <!-- Link to your CSS file -->
</head>
<body>

<div id="dashboard-container">
    <h2 class="title">Your Recent Feedbacks</h2>

    <?php
    // Check if any feedback entries were found
    if ($result->num_rows > 0) {
        // Loop through and display each feedback entry
        while ($row = $result->fetch_assoc()) {
            echo "<div class='feedback-entry'>";
            echo "<p class='feedback-id'><strong>ID:</strong> " . $row['id'] . "</p>";
            // Uncomment if you want to show name and email
            // echo "<p class='feedback-name'><strong>Name:</strong> " . $row['name'] . "</p>";
            echo "<p class='feedback-phone'><strong>Phone:</strong> " . $row['phone'] . "</p>";
            echo "<p class='feedback-company'><strong>Company:</strong> " . $row['company'] . "</p>";
            echo "<p class='feedback-message'><strong>Message:</strong> " . $row['message'] . "</p>";
            echo "<div class='action-buttons'>";
            echo "<button class='btn-update' onclick='updateFeedback(" . $row['id'] . ")'>Update</button>";
            echo " | ";
            echo "<a href='delete_feedback.php?id=" . $row['id'] . "' class='btn-delete' onclick=\"return confirm('Are you sure you want to delete this feedback?');\">Delete</a>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p class='no-feedback'>No feedback found.</p>"; // Display if there is no feedback
    }
    $con->close(); // Close the database connection
    ?>
</div>





<script>
function updateFeedback(id) {
    var newMessage = prompt("Enter your new feedback message:");
    
    if (newMessage !== null && newMessage.trim() !== "") {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "update_feedback.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                alert(xhr.responseText);
                location.reload();
            }
        };
        xhr.send("id=" + id + "&message=" + encodeURIComponent(newMessage));
    } else {
        alert("Message cannot be empty!");
    }
}
</script>

</body>
</html>
