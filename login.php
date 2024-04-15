<?php
session_start();

require "db_connect.php";


// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if username and password are provided
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashedPassword = sha1($password);

        $validWord = "/^[\w]+$/";

        if (!preg_match($validWord, $username) && !preg_match($validWord, $password)) {
            header("location: index.php?login_error=1");
        }
        
        // prepare sql statement
        $sql = "select * from loginInformation where username='$username' and password='$hashedPassword'";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $result = $statement->get_result();
        
        // Validate credentials
        if ($result->num_rows == 1) {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            header("location: success.php");
        }
        else {
            header("location: index.php?login_error=1");
        }
        
        $conn->close();
    }
}
?>