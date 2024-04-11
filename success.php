<?php
session_start();

// Check if the user is logged in, if not, redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Success</title>
</head>
<body>
    <h2>Login Success</h2>
    <p>Welcome, <?php echo $_SESSION["username"]; ?>!</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
