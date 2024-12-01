<?php
$connection = mysqli_connect('localhost', 'root', '', 'tutorial');

// Check if connection is successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if id is passed
if (isset($_GET['id'])) {
    $bookingId = $_GET['id'];  // Change this to 'id' as in the URL

    // Fetch the booking details to pre-fill the form
    $sql = "SELECT * FROM bookingForm WHERE bookingId='$bookingId'";
    $result = $connection->query($sql); 

    // Check if the query was successful
    if (!$result) {
        die("Query Failed! " . mysqli_error($connection));
    } else {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result); 
            

        } else {
            die("No booking found with this ID.");
        }
    }
} else {
    die("No booking ID provided!");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Booking</title>
    <link rel="stylesheet" href="styles/booking_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="booking_form">
    <div class="section">
        <div class="form_container">
            <h1 class="heading">Update Booking</h1>
            <form action="updatebooking.php" method="post" id="bookingForm" class="form">
                <input type="hidden" name="bookingId" value="<?php echo htmlspecialchars($row['bookingId']); ?>">
                
                <div class="name_column">
                    <div class="input_box">
                        <label>First Name</label>
                        <input type="text" id="firstName" placeholder="First Name" name="firstName" value="<?php echo htmlspecialchars($row['firstName']); ?>" required>
                    </div>
            
                    <div class="input_box">
                        <label>Last Name</label>
                        <input type="text" id="lastName" placeholder="Last Name" name="lastName" value="<?php echo htmlspecialchars($row['lastName']); ?>" required>
                    </div>
                </div>
                <div class="input_box">
                    <label>NIC Number</label>
                    <input type="text" id="nic" placeholder="Enter NIC Number" name="nic" value="<?php echo htmlspecialchars($row['nic']); ?>" required>
                </div>
                <div class="input_box">
                    <label>Email Address</label>
                    <input type="email" id="email" placeholder="someone@example.com" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>
                </div>
                <div class="input_box">
                    <label>Mobile Number</label>
                    <input type="tel" id="number" maxlength="10" placeholder="071 234 5678" name="number" value="<?php echo htmlspecialchars($row['number']); ?>" required>
                </div>
                <div class="input_box">
                    <label>Address</label>
                    <input type="text" id="address1" placeholder="Address Line 1" name="address1" value="<?php echo htmlspecialchars($row['address1']); ?>" required>
                    <input type="text" id="address2" placeholder="Address Line 2" name="address2" value="<?php echo htmlspecialchars($row['address2']); ?>" required>
                    <input type="text" id="city" placeholder="City" name="city" value="<?php echo htmlspecialchars($row['city']); ?>" required>
                    <input type="text" id="postal" placeholder="Postal" name="postal" value="<?php echo htmlspecialchars($row['postal']); ?>" required>
                </div>
                <br>
                <label>Number of Persons</label>
                <div class="people">
                    <div class="input_box">
                        <label>Adults</label>
                        <input type="number" id="adult" min="1" name="adult" value="<?php echo htmlspecialchars($row['adult']); ?>" required>
                    </div>
                    <div class="input_box">
                        <label>Children</label>
                        <input type="number" id="children" name="children" value="<?php echo htmlspecialchars($row['children']); ?>" min="0">
                    </div>
                </div>
                <div class="column">
                    <div class="input_box">
                        <label>Select Date</label>
                        <input type="date" id="date" name="date" value="<?php echo htmlspecialchars($row['date']); ?>" required>
                    </div>
                    <div class="input_box">
                        <label>Select Time</label>
                        <input type="time" id="time" name="time" value="<?php echo htmlspecialchars($row['time']); ?>" required>
                    </div>
                </div>
                <button type="submit" class="button" id="submitButton">Update</button>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
