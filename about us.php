<?php 
   session_start();

   include("php/config.php");
   
?>

<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
    <link rel="stylesheet" href="styles/booking_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="about_us">
    <section class="about_body">
        	<!-- Header -->
    <header class="navi">
        <div class="logo">
            <a href= "../signup/homepage.php"><img src="images/logo.png" alt="Company Logo" class="logoimg"></a>
  
  	 
        </div>

        <nav class="nav_link">
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="about us.php">About Us</a></li>
                <li><a href="packages.php">Packages</a></li>
                <li><a href="../signup/contact-us.php">Contact Us</a></li>
                <li><a href="feedback_form.php">Feedback</a></li>
            </ul>
        </nav>

        <div class="account">
            <a href="user_dashboard.php"><img src="images/user.png" alt="user image" class="user"></a>

        </div>
    </header>







        <!--Main Section-->
        <div class="about_background">
            <div class="heading">
                <h1>About Us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Sapiente blanditiis placeat ducimus, nostrum veniam iste doloribus,
                    neque praesentium ipsum sit autem esse provident,
                    explicabo eligendi officia eos vel distinctio architecto.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Sapiente blanditiis placeat ducimus, nostrum veniam iste doloribus,
                    neque praesentium ipsum sit autem esse provident,
                    explicabo eligendi officia eos vel distinctio architecto.
                </p>
            </div>

            <div class="image">
                <img src="images/img1.jpg" alt="Image1">
                <img src="images/img2.jpg" alt="Image2">
                <img src="images/img3.jpg" alt="Image3">
            </div>
        </div>

        <div class="content">
            <div class="vision">
                <div class="vision_image">
                    <img src="images/vision.png" alt="Vision">
                </div>

                <div class="vision_content">
                    <h2>Vision</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>

            <div class="mission">
                <div class="mission_content">
                    <h2>Mission</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="mission_image">
                    <img src="images/Mission.png" alt="Mission">
                </div>
            </div>

            <div class="value">
                <div class="value_image">
                    <img src="images/Values.png" alt="Value">
                </div>

                <div class="value_content">
                    <h2>Our Values</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
            </div>
        </div>

        </div>






        <!-- Footer -->
        <footer class="footerNavi">
            <div class="footerContainer">
                <div class="footerNav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="about us.html">About Us</a></li>
                        <li><a href="packages.html" target="_blank">Packages</a></li>
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

    </section>
</body>

</html>