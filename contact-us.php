<?php 
   session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Contact page</title>
		<link rel="stylesheet" href="style/contact-us-style.css">
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body>
	
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
	
	
	
	
	
	
	
		<section class="contact-section1">
			<div class="container">
				<h4>CONTACT</h4>
				<h1>Have questions about packages or need to inform something?</h1>
				<p>If you have any questions about packages or need to share anything with us, please don’t hesitate to reach out. We are happy to hear you. Our team is here to offer the answers and support you need.</p>
				<div>
					<img class="back-img" src="images/Contact-Background img 1.png" alt= "Background image">
				</div>
			</div>
		</section>
		
		<section class="contact-section2">
        <div class="contact-container">
            <div class="quick-contacts">
                <h2>Quick contacts</h2>
				<p><i class="fas fa-map-marker-alt"></i> 123 S 4th St, Colombo 07, SL.</p>
                <p><i class="fas fa-phone"></i> +94 78 444 5902</p>
                <p><i class="fas fa-envelope"></i> mail@ybcreation.tech</p>
				<br>
				<hr>
                <h3><i class='fas fa-comments'></i>  Need help from an expert?</h3>
                <p>Whether you’re stuck or need guidance, our friendly experts are here to assist you.</p>
                <a href="#" class="support-link"> Open a support ticket </a>
				<br>
				<hr>
                <h3><i class="fa-brands fa-facebook"></i>  Facebook group</h3>
                <p>Become part of our web dev network! Join our Facebook group for offers, discussions, and valuable tips.</p>
				<a href="#" class="support-link"> join group </a>
            </div>

            <div class="contact-form">
                <h2>Contact & Support</h2>
           
                <form>
                    <label for="name">Full Name <span>*</span></label>
                    <input type="text" id="name" name="name" placeholder="Enter Full Name" required>

                    <label for="email">Email <span>*</span></label>
                    <input type="email" id="email" name="email" placeholder="Enter E-mail" required>

                    <label for="phone">Phone Number <span>*</span></label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter Phone No" required>

                    <label for="subject">Subject <span>*</span></label>
                    <input type="text" id="subject" name="subject" placeholder="Enter Subject" required>

                    <label for="message">How can we help? <span>*</span></label>
                    <textarea id="message" name="message" placeholder="Enter Massage" required></textarea>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
		</section>
		<br>
	
	<section>
	 <!-- Footer -->
    <footer class="footerNavi">
        <div class="footerContainer">
            <div class="footerNav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Packages</a></li>
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