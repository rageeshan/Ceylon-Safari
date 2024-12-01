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
    <title>Change Profile</title>

    <script>
        function validateform() {
            const password = document.getElementById("password").value;
            const age = document.getElementById("age").value;
            let errorMessage = "";

            // Check if password is at least 8 characters long
            if (password.length < 8) {
                errorMessage += "Password must be at least 8 characters long.\n";
            }

            // Check if age is at least 70
            if (age > 90) {
                errorMessage += "Age must be low 90.\n";
            }

            if (age < 10) {
                errorMessage += "Age must be high 10.\n";
            }

            // If there is an error, display it and prevent form submission
            if (errorMessage) {
                alert(errorMessage);
                return false;
            }

            return true; // If no error, allow form submission
        }
    </script>

</head>
<body>
    <div class="nav">
        <div class="logo">
            <img src="images/logo.png"  alt="Logo" class="logoimg">
        </div>

        <div class="right-links">
            <a href="#">Change Profile</a>
            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <?php 
               if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                $password = $_POST['password'];
                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE users SET Username='$username', Email='$email', Age='$age', Password='$password' WHERE Id=$id ") or die("error occurred");

                if($edit_query){
                    echo "<div class='message'>
                    <p>Profile Updated!</p>
                </div> <br>";
              echo "<a href='user_dashboard.php'><button class='btn'>Go Home</button>";
       
                }
               }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                    $res_Password = $result['Password'];
                }

            ?>
            <header>Change Profile</header>
            <form action="" method="post" onsubmit="return validateform()">
                <div class= "field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" value="<?php echo $res_Age; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" value="<?php echo $res_Password; ?>" autocomplete="off" required>
                </div>
                
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>

                
                <div class="links">
                    Do you want to delete account? <a href="user_delete_account.php">Delete</a>
                </div>
                
            </form>

            
        </div>
        <?php } ?>
      </div>
    

</body>
</html>