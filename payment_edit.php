<?php
$connection = mysqli_connect('localhost', 'root', '', 'tutorial');

// Check if connection is successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if id is passed
if (isset($_GET['id'])) {
    $payment_ID = $_GET['id'];  // Change this to 'id' as in the URL

    // Fetch the payment details to pre-fill the form
    $sql = "SELECT * FROM payment_details WHERE payment_ID='$payment_ID'";
    $result = $connection->query($sql); 

    // Check if the query was successful
    if (!$result) {
        die("Query Failed! " . mysqli_error($connection));
    } else {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result); 
            

        } else {
            die("No payment ID found");
        }
    }
} else {
    die("No Payment ID provided!");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Update payment</title>
</head>
<body>
    <div class="container">
        <div class="container my-5">

            <h2>Update Payment</h2>
            
            <form action="edit_updatepayment.php" method="post" id="payment_details">
            <input type="hidden" name="payment_ID" value="<?php echo htmlspecialchars($row['payment_ID']); ?>">

                <div class="row mb-3">
                    <label for="card_number" class="col-sm-3 col-form-label">Card Number : </label><br>
                    <div class="col-sm-6">
                        <input type="text" name="card_number" id="card_number" maxlength="16" value="<?php echo ($row['card_number']); ?>" autocomplete="off" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="cardholder_name" class="col-sm-3 col-form-label">Cardholder Name : </label>
                    <div class="col-sm-6">
                        <input type="text" name="cardholder_name" id="cardholder_name" value="<?php echo ($row['cardholder_name']); ?>" autocomplete="off" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="expiry_date" class="col-sm-3 col-form-label">Expiry Date : </label>
                    <div class="col-sm-6">
                        <input type="text" name="expiry_date" id="expiry_date" maxlength="5" value="<?php echo htmlspecialchars($row['expiry_date']); ?>"  autocomplete="off" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="cvv" class="col-sm-3 col-form-label">CVV : </label>
                    <div class="col-sm-6">
                        <input type="text" name="cvv" id="cvv" maxlength="3" autocomplete="off" value="<?php echo htmlspecialchars($row['cvv']); ?>" required>
                    </div>
                </div>
                

                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <input type="submit" class="btn btn-success" name="submit" value="Update Payment">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>