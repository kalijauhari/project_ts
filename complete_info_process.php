<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $college = $_POST["college"];
    $course = $_POST["course"];
    $dept = $_POST["dept"];
    $guide_name = $_POST["guide_name"];
    $project_title = $_POST["project_title"];
    $project_submit = $_POST["project_submit"];

    $servername = "localhost"; // Change to your database host
    $username_db = "root"; // Change to your database username
    $password_db = ""; // Change to your database password
    $dbname = "project_ts"; // Change to your database name

    try {
        $conn = new mysqli($servername, $username_db, $password_db, $dbname);

        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }

        // Use prepared statement to insert data into tbl_traineeinfo
        $stmt = $conn->prepare("INSERT INTO tbl_traineeinfo (`Email_ID`, `Name`, `Contact_no`, `College`, `Course`, `Dept.`, `Guide_name`, `Project_title`, `Project_Submit`) 
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssissssss", $email, $name, $contact, $college, $course, $dept, $guide_name, $project_title, $project_submit);

        if ($stmt->execute()) {
            header("Location: login_1.php?info_completed=1");
            exit;
        } else {
            throw new Exception("Error inserting data into tbl_traineeinfo: " . $stmt->error);
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "Caught exception: " . $e->getMessage();
    }
}
?>
