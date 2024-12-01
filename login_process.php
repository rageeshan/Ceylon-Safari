<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "tutorial"); // Update with your DB credentials

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $adminEmail = mysqli_real_escape_string($con, $_POST['aemail']);
    $adminPassword = mysqli_real_escape_string($con, $_POST['apassword']);

    $result = mysqli_query($con, "SELECT * FROM admininformation WHERE Email='$adminEmail' AND Password='$adminPassword'") or die("Select Error");
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $_SESSION['valid'] = $row['Email'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Wrong Email or Password, please try again.'); window.location.href='loginpage.php';</script>";
    }
} else {
    header("Location: loginpage.php");
}

mysqli_close($con);
?>
