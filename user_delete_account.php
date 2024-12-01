<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Delete Account</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php 
            

            
            if (isset($_POST['submit'])) {
                
                $id = $_SESSION['id'];

                
                $delete_query = mysqli_query($con, "DELETE FROM users WHERE Id=$id") or die("Error occurred while deleting user");

                if ($delete_query) {
                    
                    echo "<div class='message'>
                        <p>User Account Deleted Successfully!</p>
                    </div> <br>";
                    echo "<a href='user_dashboard.php'><button class='btn'>Go Home</button></a>";

                    
                    session_destroy();
                 } else {
                    echo "<div class='message'>
                        <p>Error occurred while deleting the user.</p>
                    </div>";
                }
            } else {
                
                $id = $_SESSION['id'];
                $query = mysqli_query($con, "SELECT * FROM users WHERE Id=$id");

                while ($result = mysqli_fetch_assoc($query)) {
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                }
            ?>
        
            
            <div class="user-info">
                <p>Username: <?php echo $res_Uname; ?></p>
                <p>Email: <?php echo $res_Email; ?></p>
                <p>Age: <?php echo $res_Age; ?></p>
            </div>
            <br>

            
            <form action="" method="post">
                <p>Are you sure you want to delete your account?</p>
                <button type="submit" name="submit" class="btn">Delete Account</button>
            </form>

            <?php 
            } 
            ?>
        </div>
    </div>
        
</body>
</html>
