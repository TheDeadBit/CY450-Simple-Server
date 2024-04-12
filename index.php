<?php
session_start();

// Check if the user is already logged in, if yes, redirect to success page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: success.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    // Display error message if login failed
    if(isset($_GET["login_error"]) && $_GET["login_error"] == 1){
        echo "<p style='color:red;'>Invalid username or password.</p>";
    }
    ?>
    <form action="login.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>