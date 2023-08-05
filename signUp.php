<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    h2 {
      text-align: center;
      margin-top: 30px;
      color: #333;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 10px;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    input[type="submit"] {
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      padding: 10px;
    }

    input[type="submit"]:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <h2>Signup!</h2>
  <form method="POST" action="signup_process.php">
     <label for="email">Email ID:</label>
     <input type="email" name="email" id="email" required>
     <label for="name">Name:</label>
     <input type="text" name="name" id="name" required>
     <label for="password">Password:</label>
     <input type="password" name="password" id="password" required>
     <label for="contact">Contact Number:</label>
     <input type="number" name="contact" id="contact" required>
     <input type="submit" value="Signup">
  </form>
</body>
</html>
