<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="login_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
<div class="background"></div>
<div class="container">
    <div class="left-section">
        <img src="boatsafari.jpg" alt="">
    </div>

    <div class="right-section">
        <div class="login-box">
            <div class="small-logo">
                <img src="logo.png" alt="" class="image-placeholder">
            </div>
            <h2>Hello, Welcome back</h2>

            <form action="login_process.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="aemail" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="apassword" required>
                </div>
                <button type="submit" name="submit" class="login-btn">LOGIN</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
