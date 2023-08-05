<!DOCTYPE html>
<html>
<head>
    <title>After Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            color: #333;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            padding: 10px 20px;
            margin: 10px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Welcome!</h1>

    <div style="text-align: center;">
        <button onclick="location.href='trainee_info.php'">Complete Info.</button>
        <button onclick="location.href='display_info.php'">Display Info.</button>
        <button onclick="location.href='logout.php'">Logout</button>
    </div>
</body>
</html>
