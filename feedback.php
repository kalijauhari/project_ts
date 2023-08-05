<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
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

    form {
      max-width: 600px;
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

    input[type="radio"] {
      margin-right: 10px;
    }

    textarea {
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
  <h1>Feedback!</h1>
  <form method="post" action="submit_feedback.php">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br><br>
    <label for="q1">Q1: How satisfied are you with the training?</label>
    <input type="radio" name="q1" value="Very Satisfied" required> Very Satisfied
    <input type="radio" name="q1" value="Satisfied"> Satisfied
    <input type="radio" name="q1" value="Neutral"> Neutral
    <br><br>
    <label for="q2">Q2: Was the course content helpful?</label>
    <input type="radio" name="q2" value="Very Helpful" required> Very Helpful
    <input type="radio" name="q2" value="Helpful"> Helpful
    <input type="radio" name="q2" value="Not Helpful"> Not Helpful
    <br><br>
    <label for="q3">Q3: Did the trainer explain the concepts clearly?</label>
    <input type="radio" name="q3" value="Very Clearly" required> Very Clearly
    <input type="radio" name="q3" value="Clearly"> Clearly
    <input type="radio" name="q3" value="Not Clearly"> Not Clearly
    <br><br>
    <label for="q4">Q4: How likely are you to recommend this training to others?</label>
    <input type="radio" name="q4" value="Very Likely" required> Very Likely
    <input type="radio" name="q4" value="Likely"> Likely
    <input type="radio" name="q4" value="Not Likely"> Not Likely
    <br><br>
    <label for="q5">Q5: Were the training materials useful?</label>
    <input type="radio" name="q5" value="Very Useful" required> Very Useful
    <input type="radio" name="q5" value="Useful"> Useful
    <input type="radio" name="q5" value="Not Useful"> Not Useful
    <br><br>
    <label for="remarks">Remarks:</label>
    <textarea name="remarks" id="remarks" rows="4" cols="50"></textarea>
    <br><br>
    <input type="submit" value="Submit Feedback">
  </form>
</body>
</html>
