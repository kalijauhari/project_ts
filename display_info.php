<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Information</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    .info-card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 20px;
    }

    .info-card h2 {
      margin-bottom: 10px;
    }

    .info-card p {
      margin: 0;
    }

    a {
      display: inline-block;
      margin-top: 10px;
      background-color: #3498db;
      color: #fff;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    a:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <h1>Student Management System</h1>

  <?php
  $servername = "localhost"; // Change to your database host
  $username_db = "root"; // Change to your database username
  $password_db = ""; // Change to your database password
  $dbname = "project_ts"; // Change to your database name

  $conn = new mysqli($servername, $username_db, $password_db, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM tbl_traineeinfo";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // Loop through the result set and display the information
      while ($row = $result->fetch_assoc()) {
          // Display the data, you can format it as per your requirements
          echo '<div class="info-card">';
          echo "<h2>Email: " . $row["Email_ID"] . "</h2>";
          echo "<p>Name: " . $row["Name"] . "</p>";
          echo "<p>Contact No: " . $row["Contact_no"] . "</p>";
          echo "<p>College: " . $row["College"] . "</p>";
          echo "<p>Course: " . $row["Course"] . "</p>";
          echo "<p>Dept: " . $row["Dept."] . "</p>";
          echo "<p>Guide Name: " . $row["Guide_name"] . "</p>";
          echo "<p>Project Title: " . $row["Project_title"] . "</p>";
          echo "<p>Project Submit Date: " . $row["Project_Submit"] . "</p>";
          echo "</div>";
      }
  } else {
      echo "No records found.";
  }
  ?>
  <a href="feedback.php">Give Feedback</a>
</body>
</html>
