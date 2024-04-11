<?php
session_start();

// Default credentials
$default_username = "admin";
$default_password = "admin";

// Check if the user is already logged in, if yes, redirect to success page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: success.php");
    exit;
}

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if username and password are provided
    if(isset($_POST["username"]) && isset($_POST["password"])){
        // Validate credentials
        if($_POST["username"] === $default_username && $_POST["password"] === $default_password){
            // Start session
            session_start();
            
            // Store session data
            $_SESSION["loggedin"] = true;
            
            // Redirect to success page
            header("location: success.php");
        } else {
            // Redirect to login page with failure message
            header("location: login.php?login_error=1");
        }
    }
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
