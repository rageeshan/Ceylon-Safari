<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="dash">
    <div class="container">
         <h1 class="text-center">Admin Dashboard</h1>

        <a href="admin_dashboard.php" class="btn btn-primary">Manage Admin Accounts</a>
        <a href="booking.html" class="btn btn-primary">New Booking</a>

        <a href="php/logout.php"> <button class="btn btn-danger">Log Out</button> </a><br><br>

         <table class="table">
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>NIC</th>
                    <th>Email Address</th>
                    <th>Mobile Number</th>
                    <th>Address line 1</th>
                    <th>Address line 2</th>
                    <th>City</th>
                    <th>Postal Code</th>
                    <th>Adults</th>
                    <th>Children</th>
                    <th>Date</th>
                    <th>Time</th>
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
                $sql = "SELECT * FROM `bookingForm`";
                $result = $connection->query($sql);

                if(!$result){
                    die("Invalid Query: ".$connection->error);
                }

                //read data of each row
                while($row=$result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[bookingId]</td>
                        <td>$row[firstName]</td>
                        <td>$row[lastName]</td>
                        <td>$row[nic]</td>
                        <td>$row[email]</td>
                        <td>$row[number]</td>
                        <td>$row[address1]</td>
                        <td>$row[address2]</td>
                        <td>$row[city]</td>
                        <td>$row[postal]</td>
                        <td>$row[adult]</td>
                        <td>$row[children]</td>
                        <td>$row[date]</td>
                        <td>$row[time]</td>
                        <td>
                            <a class='btn btn-success' href='booking_edit.php?id=$row[bookingId]'>Update</a>
                            <a class='btn btn-danger' href='booking_delete.php?id=$row[bookingId]'>Delete</a>
                        </td>
                    </tr>
                    ";
                }


                ?>
                <tr>
                    <th></th>
                </tr>
            </tbody>
         </table>
    </div>
</body>
</html>