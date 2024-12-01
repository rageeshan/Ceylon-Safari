<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Admin_control.css">
    <title>Admin Control</title>
</head>
<body>
    <h1>Admin Control Panel</h1>
    <?php
    
    ?>
<div class = "container"> 
    <form  method="post" action="Data.php" >
       
        Name: <input type="text" name="aname" placeholder="Admin Name" required><br><br>
        Contact: <input type="phone" name="acontact" placeholder="Admin Contact number" required><br><br>
        Email: <input type="text" name="aemail" placeholder="Admin email" required><br><br>
        Password: <input type="password" name="apassword" placeholder="Admin password" required><br><br>
        
        <button type="submit">Submit</button>
        <div class="message" id="message" style="display:none;">Details submitted successfully!</div>
    </form>
</div>   
</body>
</html>