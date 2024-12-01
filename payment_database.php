<?php 
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
         <h2>Payment</h2>


         <table class="table">
            <thead>
                <tr>
                    <th>Payment ID</th>
                    <th>Card Number</th>
                    <th>Card Holder Name</th>
                    <th>Expiry Date</th>
                    <th>CVV</th>
                    <th>Payment Date</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                // Database connection
                $connection = mysqli_connect('localhost', 'root', '', 'tutorial');

                // Check connection
                if ($connection->connect_error) {
                    die('Connection Failed: ' . $connection->connect_error);
                }
                
                //Read data from database
                $sql = "SELECT * FROM payment_details";
                $result = $connection->query($sql);

                if(!$result){
                    die("Invalid Query: ".$connection->error);
                }

                //read data of each row
                while($row=$result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[payment_ID]</td>
                        <td>$row[card_number]</td>
                        <td>$row[cardholder_name]</td>
                        <td>$row[expiry_date]</td>
                        <td>$row[cvv]</td>
                        <td>$row[payment_date]</td>
                        <td>
                            <a class='btn btn-success' href='payment_edit.php?id=$row[payment_ID]'>Update</a>
                            <a class='btn btn-danger' href='p_delete.php?id=$row[payment_ID]'>Delete</a>
                        </td>
                    </tr>
                    ";
                }


                ?>
               
            </tbody>
         </table>
    </div>
</body>
</html>
