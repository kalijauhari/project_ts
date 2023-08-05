<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Information</title>
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
            width: 60%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 16px;
            color: #333;
        }

        input[type="email"],
        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            padding: 10px 20px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h2>Enter Information</h2>
    <form method="POST" action="complete_info_process.php">
        <label for="email">Email ID :</label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <label for="name">Name :</label>
        <input type="text" name="name" id="name" required>
        <br><br>
        <label for="contact">Contact Number :</label>
        <input type="number" name="contact" id="contact" required>
        <br><br>
        <label for="college">College :</label>
        <input type="text" name="college" id="college" required>
        <br><br>
        <label for="course">Course :</label>
        <input type="text" name="course" id="course" required>
        <br><br>
        <label for="dept">Department :</label>
        <input type="text" name="dept" id="dept" required>
        <br><br>
        <label for="guide_name">Guide Name :</label>
        <input type="text" name="guide_name" id="guide_name" required>
        <br><br>
        <label for="project_title">Project Title :</label>
        <input type="text" name="project_title" id="project_title" required>
        <br><br>
        <label for="project_submit">Project Submit :</label>
        <input type="date" name="project_submit" id="project_submit" required>
        <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
