<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: user_signup.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/style.css">
    <title>User dashboard</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


</head>
<body class="dashboard-container">
    <div class="nav">
        <div class="logo">
           <a href="homepage.php"> <img src="images/logo.png"  alt="Logo" class="logoimg"></a>
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='user_edit_account.php?Id=$res_id'>Change Profile</a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
        
        </div>


        </div>
        </div>
    
    </div>
    
    </div>
    <main>

       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
            </div>
            <div class="box">
                <p>Your email is <b><?php echo $res_Email ?></b>.</p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                <p>And you are <b><?php echo $res_Age ?> years old</b>.</p> 
         
        </div>
        </div>
       </div>
    
    </main>
    </div>

    <div class= "see-packages">
        <div class="pkg-btn">
           <a href="packages.php"> <button class="btn-pkg" href="#">See package</button></a>
        </div>
    </div>

    <section class="services-section">
       
        <div class="service-cards">
            <div class="card1">
                
                <a href="user_profile.php">View your feedback</a>
            </div>

            <div class="card2">
                
                <a href="payment_database.php">View your payments</a>
            </div>

            
        </div>
    </section>

   

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