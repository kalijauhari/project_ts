<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $contact = $_POST["contact"];

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

    // Insert user data into the "tbl_signup" table
    $sql = "INSERT INTO tbl_signup (Email_ID, Name, Password, Contact_no) VALUES ('$email', '$name', '$password', '$contact')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php"); // You can redirect to a success page if you wish
        exit; // Make sure to exit the script after the header redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
