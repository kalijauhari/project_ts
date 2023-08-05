<?php
session_start(); // Start the session (needed for session variables)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve login form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Database connection
    $servername = "localhost"; // Change to your database host
    $username_db = "root"; // Change to your database username
    $password_db = ""; // Change to your database password
    $dbname = "project_ts"; // Change to your database name

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the entered email and password match any record in the "tbl_signup" table
    $sql = "SELECT * FROM tbl_signup WHERE Email_ID='$email' AND Password='$password'";

    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // Login successful
        $user = $result->fetch_assoc();

        // Store user's session information for future use (e.g., user authentication)
        $_SESSION["email"] = $user["Email_ID"]; // Store the user's email in a session variable

        // Redirect to dashboard or any other page after successful login
        header("Location: login_1.php");
        exit; // Make sure to exit the script after the header redirect
    } else {
        // Login failed
        echo "Invalid login credentials. Please try again.";
    }

    $conn->close();
}
?>
