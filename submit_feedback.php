<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
    $remarks = $_POST["remarks"];

    $servername = "localhost"; // Change to your database host
    $username_db = "root"; // Change to your database username
    $password_db = ""; // Change to your database password
    $dbname = "project_ts"; // Change to your database name

    // Create a connection to the database
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert feedback data into the "tbl_fdbk" table
    $sql = "INSERT INTO tbl_fdbk (Email_ID, FD_Q1, FD_Q2, FD_Q3, FD_Q4, FD_Q5, Remarks) 
            VALUES ('$email', '$q1', '$q2', '$q3', '$q4', '$q5', '$remarks')";

    if ($conn->query($sql) === TRUE) {
      header("Location: login_1.php");
      exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
