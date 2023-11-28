<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the credentials are valid (this is a basic example, replace with your authentication logic)
    if ($username === "example" && $password === "password") {
        // Start the session and store the username
        session_start();
        $_SESSION["username"] = $username;

        // Redirect to a welcome page or dashboard
        header("Location: welcome.php");
        exit();
    } else {
        // Invalid credentials, show an error message or redirect to the login page
        echo "Invalid username or password.";
    }
}
?>