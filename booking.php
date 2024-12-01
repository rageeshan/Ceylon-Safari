<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: user_signup.php");
   }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Booking Page</title>
    <link rel="stylesheet" href="styles/booking_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="booking_form">

    <!-- Main part -->
    <div class="section">
        <div class="form_container">
            <h1 class="heading">Booking Details</h1>
            <p>Fill the Details</p>
            <form action="bookingdb.php" method="post" id="bookingForm" class="form">
            
                <div class="name_column">
                    <div class="input_box">
                        <label>First Name</label>
                        <input type="text" id="firstName" placeholder="First Name" name="firstName" required>
                    </div>
            
                    <div class="input_box">
                        <label>Last Name</label>
                        <input type="text" id="lastName" placeholder="Last Name" name="lastName" required>
                    </div>
                </div>
            
                <div class="input_box">
                    <label>NIC Number</label>
                    <input type="text" id="nic" placeholder="Enter NIC Number" name="nic" required>
                </div>
            
                <div class="input_box">
                    <label>Email Address</label>
                    <input type="text" id="email" placeholder="someone@example.com" name="email" required>
                </div>
            
                <div class="input_box">
                    <label>Mobile Number</label>
                    <input type="text" id="number" maxlength="10" placeholder="071 234 5678" name="number" required>
                </div>
            
                <div class="input_box">
                    <label>Address</label>
                    <input type="text" id="address1" placeholder="Address Line 1" name="address1" required>
                    <input type="text" id="address2" placeholder="Address Line 2" name="address2" required>
                    <input type="text" id="city" placeholder="City" name="city" required>
                    <input type="text" id="postal" placeholder="Postal" name="postal" required>
                </div>
                <br>
                <label>Number of Persons</label>
                <div class="people">
                    <div class="input_box">
                        <label>Adults</label>
                        <input type="number" id="adult" min="1" name="adult" required>
                    </div>
            
                    <div class="input_box">
                        <label>Children</label>
                        <input type="number" id="children" name="children" min="0">
                    </div>
                </div>
            
                <div class="column">
                    <div class="input_box">
                        <label>Select Date</label>
                        <input type="date" id="date" name="date" required>
                    </div>
            
                    <div class="input_box">
                        <label>Select Time</label>
                        <input type="time" id="time" name="time" required>
                    </div>
                </div>
            
                <button class="button" id="submitButton">Submit</button>
            
            </form>
            
        </div>
    </div>





    <!-- Footer -->
    <footer class="footerNavi">
        <div class="footerContainer">
            <div class="footerNav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="about us.html">About Us</a></li>
                    <li><a href="packages.html">Packages</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Feedback</a></li>
                </ul>
            </div>

            <div class="social_media">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>

        </div>
        <div class="footerBottom">
            <p>&copy; 2024 Ceylon Boat Safari. All rights reserved.</p>
            <p>Terms and conditions | Privacy Policy</p>
        </div>
    </footer>


    <script src="js/booking_script.js"></script>


</body>

</html>