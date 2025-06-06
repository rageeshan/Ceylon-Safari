<?php 
   session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Packages</title>
    <link rel="stylesheet" href="styles/booking_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="package_body">
    
		<!-- Header -->
        <header class="navi">
        <div class="logo">
            <a href= "homepage.php"><img src="images/logo.png" alt="Company Logo" class="logoimg"></a>
  
  	 
        </div>

        <nav class="nav_link">
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="about us.php">About Us</a></li>
                <li><a href="packages.php">Packages</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
                <li><a href="feedback_form.php">Feedback</a></li>
            </ul>
        </nav>

        <div class="account">
            <a href="user_dashboard.php"><img src="images/user.png" alt="user image" class="user"></a>

        </div>
    </header>



    <!-- Main part -->

    <div class="container">
        <h1 class="heading">Packages</h1>

        <div class="boxContainer">
            <div class="box">
                <h3>Package 01</h3>
                <h4>Normal Package</h4>
                <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore,
                    repudiandae quam facilis praesentium ipsum dolor omnis atque,</p>
                <p>Rs.XXXX</p>
                <a href="booking.php" target="_blank" class="btn">Book now &rarr;</a>
            </div>

            <div class="box">
                <h3>Package 02</h3>
                <h4>Duo Package</h4>
                <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore,
                    repudiandae quam facilis praesentium ipsum dolor omnis atque,</p>
                <p>Rs.XXXX</p>
                <a href="booking.php" target="_blank" class="btn">Book now &rarr;</a>
            </div>

            <div class="box">
                <h3>Package 03</h3>
                <h4>4 Person package</h4>
                <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore,
                    repudiandae quam facilis praesentium ipsum dolor omnis atque,</p>
                <p>Rs.XXXX</p>
                <a href="booking.php" target="_blank" class="btn">Book now &rarr;</a>
            </div>

            <div class="box">
                <h3>Package 04</h3>
                <h4>Family Package</h4>
                <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore,
                    repudiandae quam facilis praesentium ipsum dolor omnis atque,</p>
                <p>Rs.XXXX</p>
                <a href="booking.php" target="_blank" class="btn">Book now &rarr;</a>
            </div>

            <div class="box">
                <h3>Package 05</h3>
                <h4>Friends Package</h4>
                <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore,
                    repudiandae quam facilis praesentium ipsum dolor omnis atque,</p>
                <p>Rs.XXXX</p>
                <a href="booking.php" target="_blank" class="btn">Book now &rarr;</a>
            </div>

            <div class="box">
                <h3>Package 06</h3>
                <h4>Tourist Package</h4>
                <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore,
                    repudiandae quam facilis praesentium ipsum dolor omnis atque,</p>
                <p>Rs.XXXX</p>
                <a href="booking.php" target="_blank" class="btn">Book now &rarr;</a>
            </div>
        </div>
    </div>






    <!-- Footer -->
    <footer class="footerNavi">
        <div class="footerContainer">
            <div class="footerNav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="about us.html" target="_blank">About Us</a></li>
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


</body>

</html>