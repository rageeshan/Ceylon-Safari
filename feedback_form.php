<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: user_signup.php");
   }
?>


<!DOCTYPE html>


<!-- pasindu  --> 


<html lang="en">
<head>
    <link rel="stylesheet" href="feedback_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Feedback Page</title>

    <script>
        function handleFormSubmission(event) {
            event.preventDefault(); // Prevent the form from submitting normally
            
            // Create a FormData object to gather form values
            const formData = new FormData(event.target);
            
            // Send the form data to submit_feedback.php using AJAX
            fetch('submit_feedback.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(result => {
                if (result === 'success') {
                    // Show the confirmation popup when feedback is recorded
                    if (confirm('Thank you for your feedback! Click OK to return to the homepage.')) {
                        window.location.href = 'homepage.php'; // Redirect after user clicks OK
                    }
                } else {
                    alert('There was an error submitting your feedback. Please try again.');
                }
            })
            .catch(error => console.log('Error:', error));
        }
    </script>
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

    <main>
        <section class="feedback-section">
            <div class="feedback-left">
                <h1>Feedback</h1>
                <p>Thank you for joining our Boat Safari experience. We hope you had an unforgettable adventure! Your feedback is important to us, as it helps us improve and enhance our services. Please take a moment to share your thoughts, suggestions, or any special moments you enjoyed. We look forward to hearing from you!</p>
            </div>

            <!-- The form will now trigger the JavaScript function on submit -->
            <form method="post" action="submit_feedback.php" class="feedback-form" onsubmit="handleFormSubmission(event)">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" id="company" name="company" placeholder="Company" required>
                </div>
                <div class="form-group form-message">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Your Message..." required></textarea>
                </div>
                <div class="form-buttons">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </section>
    </main>

    <section>
	 <!-- Footer -->
    <footer class="footerNavi">
        
        <div class="footerBottom">
            <p>&copy; 2024 Ceylon Boat Safari. All rights reserved.</p>
            <p>Terms and conditions | Privacy Policy</p>
        </div>
    </footer>
	
	</section>	

</body>
</html>
