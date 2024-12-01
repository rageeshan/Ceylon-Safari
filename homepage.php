<?php 
   session_start();
   $con = mysqli_connect("localhost","root","","tutorial") or die("Couldn't connect");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<link rel="stylesheet" href="style/homestyle.css">
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
	</head>
	<body>
	
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
                <li><a href="contact-us.php">Contact Us</a></li>
                <li><a href="feedback_form.php">Feedback</a></li>
            </ul>
        </nav>

        <div class="account">
            <a href="user_dashboard.php"><img src="images/user.png" alt="user image" class="user"></a>

        </div>
    </header>

    <!-- Main part -->
	
		<section class="main-content">
        <div class="container">
			<div calss="heading">
            	<h1>EXPERIENCE THE WATER ADVENTURES</h1>
            	<p>Take a magical speed-boat ride down the beautiful Madu River, a wetland estuary spreading over 900 hectares of which 770 hectares is covered with water and inhabited with 64 islands. The boat ride is a wonderful way to take a closer look at this complex wetland ecosystem; a world heritage site protected by the Ramsar Convention on Wetlands being one of the last wetlands in Sri Lanka to contain a pristine mangrove forest.</p>
            	<br>
				<button><a href="packages.php" >Find Out More</a></button>

			</div>	
        </div>
        </section>
		
		
		
    <section class="services-section">
        <h1>Our Services</h1>
        <p class="subheading">Embark on unforgettable journeys through serene waters, encountering wildlife and nature like never before.<br> Discover the beauty of the wilderness with our tailored boat safari adventures.</p>

        <div class="service-cards">
            <div class="card">
                <img src="images/card image1.jpg" alt="Sunrise Wildlife Safari">
                <h2>Sunrise Wildlife Safari</h2>
                <p>Start your day with the tranquility of a sunrise on the water, as nature begins to stir around you. Our Sunrise Wildlife Safari offers an intimate encounter with the vibrant ecosystems that thrive at dawn.</p>
                
            </div>

            <div class="card">
                <img src="images/card2.jpg" alt="Half-Day Adventure">
                <h2>Half-Day Adventure</h2>
                <p>For those seeking a deeper dive into the wild, our Half-Day Adventure Cruise offers the perfect blend of exploration and relaxation. Journey through expansive waterways, where the chances of encountering iconic.</p>
                
            </div>

            <div class="card">
                <img src="images/card3.jpg" alt="SunsetLuxury Safary">
                <h2>Sunset Luxury Safari</h2>
                <p>Indulge in the magic of dusk with our exclusive Sunset Luxury Safari, designed for those who appreciate a touch of elegance while exploring the wild. As the sun sets and paints the sky in breathtaking hues of orange and pink.</p>
            </div>
        </div>
    </section>
	
	
	<section class="about-us-section">
    <div class="text-content">
        <h2>About Us</h2>
        <br>
        <br>
        <h1>We are passionate about creating unforgettable boat safari adventures.</h1>
        <p>Our adventure began with a simple goal: to offer unforgettable wildlife experiences through boat safaris. Today, we’ve grown into a team of passionate explorers, committed to delivering thrilling and immersive journeys on the water.</p>
        
        <a href="about us.php" class="button">View more</a>
    </div>
    <div class="image-content">
        <img src="images/3b.jpg" alt="Team working on digital project">
    </div>
   </section>
   <br>
   <br>
   <div class="order-section">
		<h2>Secure Your Unforgettable Boat Safari Adventure Today – Explore Breathtaking Landscapes, Witness Majestic Wildlife, and Create Lasting Memories<h2>
		<div class= btn>
        <a href = packages.php><button>Request Journey</button></a>
        </div>
   </div>
   <br>

  
   
   <div class="questions-section">
		<h1>Questions?</h1>
		<p>Whether you're curious about our routes, wildlife encounters, or booking options, we’re here to guide you through every adventure.</p>
    
		<div class="search-bar">
			<input type="text" placeholder="Search">
			<button><img src="images/search-icon.png" alt="Search"></button>
		</div>
		<br>
		<br>
		<div>
			<a href="contact-us.php" class="QA" >Contact Us</a>
		</div>	
	</div>
	<br>
	<br>
	<br>
	
   
   <section>
	 <!-- Footer -->
    <!-- Footer -->
    <footer class="footerNavi">
        <div class="footerContainer">
            <div class="footerNav">
                <ul>
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="about us.php" >About Us</a></li>
                    <li><a href="packages.php">Packages</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <li><a href="feedback_form.php">Feedback</a></li>
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

