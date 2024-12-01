<?php 
session_start();

include("php/config.php");

if (!isset($_SESSION['valid'])) {
    header("Location: user_signup.php");
    exit;
}

if (isset($_POST['submit'])) {
    // Retrieve form values
    $card_number = $_POST['card_number']; 
    $cardholder_name = $_POST['cardholder_name'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];
    
    echo "Card Number Submitted: " . $card_number;

    // Insert data into the database
    $query = "INSERT INTO payment_details (card_number, cardholder_name, expiry_date, cvv) 
              VALUES ('$card_number', '$cardholder_name', '$expiry_date', '$cvv')";

    if (mysqli_query($con, $query)) {
        // Payment details recorded successfully
        echo "Payment details recorded successfully!";
        
        // Redirect to booking_confirmed.html
        header("Location: booking confirmed.html");
        exit;  // Make sure the script ends after the redirect
    } else {
        die("Error Occurred: " . mysqli_error($con));
    }
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payment page.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Payment</title>

<script>

function validateform() {
    document.addEventListener("DOMContentLoaded", function () {
        const card_numberInput = document.getElementById('card_number');
        const cardholder_nameInput = document.getElementById('cardholder_name');
        const expiry_dateInput = document.getElementById('expiry_date');
        const cvvInput = document.getElementById('cvv');

        // Format card number as '1111 2222 3333 4444'
        card_numberInput.addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');  // Remove all non-digit characters
            value = value.substring(0, 16);  // Restrict input to 16 digits

            e.target.value = formattedValue;
        });

        // Restrict cardholder name to alphabets and spaces
        cardholder_nameInput.addEventListener('input', function (e) {
            let value = e.target.value.replace(/[^a-zA-Z\s]/g, '');  // Remove non-alphabetic characters
            e.target.value = value;
        });

        // Format expiry date as MM/YY
        expiry_dateInput.addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');  // Remove non-digit characters


            e.target.value = value.substring(0, 5);  // Limit the input to 5 characters (MM/YY)
        });

        // Validate expiry date on blur
        expiry_dateInput.addEventListener('blur', function (e) {
            const [month, year] = e.target.value.split('/').map(Number);

            if (month < 1 || month > 12) {
                alert('Invalid month. Please enter a valid month between 01 and 12.');
                e.target.value = '';
            }

            const currentYear = new Date().getFullYear() % 100; // Get last two digits of current year
            if (year < currentYear) {
                alert('Invalid year. The expiry year is in the past.');
                e.target.value = '';
            }
        });

        // Limit CVV input to 3 digits
        cvvInput.addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');  // Remove non-digit characters
            e.target.value = value.substring(0, 3);  // Limit input to 3 digits
        });

        // Form submission validation
        document.querySelector('.paybutton').addEventListener('click', function (event) {
            const card_number = card_numberInput.value;
            const cardholder_name = cardholder_nameInput.value;
            const expiry_date = expiry_dateInput.value;
            const cvv = cvvInput.value;

            // Basic validation for form fields
            if (!card_number || !cardholder_name || !expiry_date || !cvv) {
                alert("All fields are required.");
                event.preventDefault(); // Prevent form submission
                return false;
            }

            // Validate card number format (16 digits, space-separated)
            const card_numberPattern = /^\d{4} \d{4} \d{4} \d{4}$/;
            if (!card_numberPattern.test(card_number)) {
                alert("Invalid card number. It should be in the format XXXX XXXX XXXX XXXX.");
                event.preventDefault();
                return false;
            }

            // Validate CVV (3 digits)
            if (cvv.length !== 3 || isNaN(cvv)) {
                alert("Invalid CVV. It should be a 3-digit number.");
                event.preventDefault();
                return false;
            }

            // Validate expiry date format (MM/YY)
            const expiry_datePattern = /^(0[1-9]|1[0-2])\/\d{2}$/;
            if (!expiry_datePattern.test(expiry_date)) {
                alert("Invalid expiry date. It should be in the format MM/YY.");
                event.preventDefault();
                return false;
            }

            // If validation passes, proceed with form submission
            alert("Payment processed successfully.");
        });
    });
};
</script>
</head>
<body>

    <div class="container">
        <h1>Make your payment</h1>

        <div class="package-info">
            <div class="package-details">
                <p>Package number</p>
                <p>Amount</p>
            </div>
            <div class="package-value">
                <p>***</p>
                <p>Rs. 1000.00</p>
            </div>
        </div>

        <h2>Payment Method</h2>

        <div class="PI">
            <p>Your payment information is safe with us</p>
        </div>
    
        <h3>Select your payment method</h3>

        <div class="payment-method">
            <input type="radio" id="visa" name="payment-method">
            <label for="visa"><img src="images/visa.jpeg" width="50px" alt="visa"></label>

            <input type="radio" id="master" name="payment-method">
            <label for="master"><img src="images/master.png" width="50px" alt="master"></label>
        </div>
    </div>
    <br>

    <div class="container">
        <div class="box form-box">
            <form action="" method="post" id="payment-form" onsubmit="return validateform()">
                <div class="paymentinfo">
                    <label for="card_number">Card Number</label>
                    <input type="text" name="card_number" id="card_number" placeholder="xxxx-xxxx-xxxx-xxxx" maxlength="16" pattern="\d{16}" title="Please enter a valid 16-digit card number">
                </div>

                <div class="paymentinfo">
                    <label for="cardholder_name">Card Holder Name</label>
                    <input type="text" name="cardholder_name" id="cardholder_name" placeholder="Name" required>
                </div>

                <div class="card-info">
                    <div class="exdate">
                        <label for="expiry_date">Expiry Date</label>
                        <input type="text" name="expiry_date" id="expiry_date" placeholder="MM/YY" maxlength="5" required>
                    </div>

                    <div class="cvv">
                        <label for="cvv">CVV</label>
                        <input type="text" name="cvv" id="cvv" placeholder="***" maxlength="3" required>
                    </div>
                </div>

                <div>
                    <input type="submit" class="paybutton" name="submit" value="Pay Now">
                </div>
            </form>
        </div>
    </div>

 
           

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





</body>
</html>
<?php } ?>









